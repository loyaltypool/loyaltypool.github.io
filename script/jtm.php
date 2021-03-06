<?php
/**use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '..\PHPMailer\src\SMTP.php';
require_once '..\PHPMailer\src\PHPMailer.php';
require_once '..\PHPMailer\src\Exception.php';
**/
class Main{
	public $userId, $email, $surname, $name, $otherNames, $country, $state, $phone,
		$creditLimit;
	private $con;

	function GetUserInfo(){
		$this->con = new Connection();
		//printf( $this->con->character_set_name());
		if (session_status() == PHP_SESSION_NONE) session_start();
		if (!(isset($_SESSION['email']) && $_SESSION['email'] != ''))
			new ServerResponse(-15, "User not logged in");
		$this->email = $_SESSION["email"];
		$query = "SELECT * FROM members Where email='".$this->email."'";
		$result = $this->con->query($query);

		if (mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_row($result)){
				$this->userId = $row[1];
				/*$this->surname = $row[4];
				$this->name = $row[5];
				$this->otherNames = $row[6];
				$this->country = $row[7];
				$this->state = $row[8];
				$this->phone = $row[9];*/
				//$this->creditLimit = $row[10];
			}

		}
		else new ServerResponse(-16, "Error reading user information!");
	}

	function GenerateUserId(){
		$keys = array("1", "2", "3", "4", "5", "6", "7", "8", "9" ,"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", 
			"m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

		$id = "";
		for ($i = 0; $i < 7; $i++){
			$id .= $keys[mt_rand(0, 34)];
		}
		return $id;
	}

	function GetUserId(){
		if (!(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')){
			header("location: login.html");
			exit;
		}
		else{$this->userId = $_SESSION["user_id"];} 
	}
}

/*class Mailer extends PHPMailer{
	private $link;
	public $param;		           // Passing `true` enables exceptions
	
	function __construct(){
		parent::__construct(true);
	    //Server settings
	    $this->SMTPDebug = 2;                                 // Enable verbose debug output
	    //		                                      // Set mailer to use SMTP
	    $this->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $this->SMTPAuth = true;                               // Enable SMTP authentication
	    $this->Username = 'erothickal@gmail.com';                 // SMTP username
	    $this->Password = 'asabi123';                           // SMTP password
	    $this->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	    $this->Port = 465;                                    // TCP port to connect to

	    //Recipients
	    $this->setFrom('erothickal@gmail.com', 'JTM COMMUNITY');
	    $this->addAddress('toyebrainz2@gmail.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    
	    //Content
	    $this->isHTML(true);                                  // Set email format to HTML
	    $this->Subject = 'JTM Email Verification';
	    $this->link = "http:localhost/jtm/verify.php?id=";

	    
	    //echo 'Message has been sent';
	}
	
	function SendMail(){
		$this->link .= $this->param;
		$this->Body    = "Click on the link below or copy to browser <br><a href='".$this->link."'>".$this->link."</a>";
		$this->AltBody = 'Copy to browser: '.$this->link;
		try{
			$this->isSMTP();
			$this->send();
			echo 'true';
		}
		catch (Exception $e) {
	    	new ServerResponse(-15, "Failed to send verification email!");
		}
	}
}*/

class DBRequest{
	private $email, $pword, $ref_code, $surname, $name, $otherNames, $country, $state, $phone;
	public $con;
	
	function __construct()
	{
		if (isset($_POST["email"])) $this->email = $_POST["email"];
		if (isset($_POST["password"])) $this->pword = $_POST["password"];
		if (isset($_POST["password"])) $this->ref_code = $_POST["referral-code"];
		if (isset($_POST["surname"])) $this->surname = $_POST["surname"];
		if (isset($_POST["name"])) $this->name = $_POST["name"];
		if (isset($_POST["other-names"])) $this->otherNames = $_POST["other-names"];
		if (isset($_POST["country"])) $this->country = $_POST["country"];
		if (isset($_POST["state"])) $this->state = $_POST["state"];
		if (isset($_POST["phone"])) $this->phone = $_POST["phone"];

		$this->con = new Connection();
		//printf( $this->con->character_set_name());
	}

	function findEmail(){
		//new ServerResponse(-10, $this->email);
		$query = "SELECT email FROM members where email='".$this->email."'";
    	return $this->con->query($query);
	}

	function isUniqueID($id){
		$query = "SELECT user_id FROM members where user_id='".$id."'";
    	if (mysqli_num_rows($this->con->query($query)) > 0) return false;
    	return true;	
	}

	function Login(){
		$query = "SELECT user_id, email FROM members where email='".$this->email."' and password='".$this->pword."'";
		$result = $this->con->query($query);
		//echo (String) ;
		session_start();
	  	if(mysqli_num_rows($result) > 0){
	  		while ($row = mysqli_fetch_row($result)){
		    	$_SESSION['user_id'] = $row[0];
		    	$_SESSION['email'] = $row[1];
		  		//if ($row[2] != "") $_SESSION['profile-updated'] = true;
		    }
		  	$this->con->close();
		  	new ServerResponse(11, "Login Successful!");
		}
		else{
		    $this->con->close();
		    session_destroy();
		    new ServerResponse(-11, "Invalid email or password!!");
		}
	}

	function Register(){
		$this->ValidateSignUpCredentials();
		$id = Main::GenerateUserId();
		if (!$this->isUniqueID($id)) return $this->Register();


		$qstring = $id."','".$this->email."','".$this->pword."','".$this->ref_code;
		$query = "insert into members(user_id, email, password, referral) values('".$qstring."')";
        if ($this->con->query($query)){
			$this->con->close();
	        session_start();
			$_SESSION['user_id'] = $id;
			$_SESSION['email'] = $this->email;

			/*$mail = new Mailer();
			$mail->param = $id;
			//echo $mail->Body;
			$mail->SendMail();*/
			new ServerResponse(10, "Registration Successful");
		}
		else{
			$this->conn->close();
			session_start();
			$_SESSION['user_id'] = "";
			$_SESSION['email'] = "";
			new ServerResponse(-13, "Registration error: Please try again!");
		}
	}

	function UpdateProfile(){
		session_start();
		if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) new ServerResponse(-14, "Not logged in!");
		$this->ValidateProfileCredentials();

		$query1 = "surname='".$this->surname."', name='".$this->name."', other_names='".$this->otherNames."', ";
		$query1 .= "country='".$this->country."', state='".$this->state."', phone='".$this->phone."'";
		$query = "UPDATE members SET $query1 WHERE email='".$_SESSION['email']."'";
		//new ServerResponse(-14, $query);

		if (Connection::Query($this->conn, $query)){
			Connection::Close($this->conn);
			$_SESSION["profile-updated"] = true;
			new ServerResponse(14, "Profile updated!");
		}
		else{
			Connection::Close($this->conn);
			new ServerResponse(-14, "Error updating profile: Please try again!");
		}
	}

	function ValidateSignUpCredentials(){
		if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $this->email))
			new ServerResponse(-12, "Invalid email address!");
		if(strlen($this->pword) < 6) new ServerResponse(-13, "Minimum password length of 6!");
	}

	function ValidateProfileCredentials(){
		if(strlen($this->surname) == 0) new ServerResponse(-13, "Enter surname!");
		if(strlen($this->name) == 0) new ServerResponse(-13, "Enter first name!");
		if(strlen($this->phone) == 0) new ServerResponse(-13, "Enter mobile number!");
	}
}

class Connection extends mysqli{
	private $servername = "db4free.net:3306";
	private $username = "toyebrainz";
	private $password = "asabi123";
	private $db = "db4_jtm";
	private $con;

	function __construct(){
		/*$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->db = "jtm";*/

		parent::__construct($this->servername, $this->username, $this->password, $this->db);
		/*Throw Sever Error Here*/
		//$this->con = new mysqli($this->servername, $this->username, $this->password, $this->db);
		//mysqli_set_charset($this->con, "utf8");

		//printf( $this->con->character_set_name());
		//die();
	}

	/*public function Close($con) { mysqli_close($con); }
	public function Query($con, $query) { return mysqli_query($con, $query); }*/
}

class ServerResponse{
	function __construct($key, $response){
		$msg = array("key"=> $key, "response"=> $response);
  		echo json_encode($msg);
  		die();
	}

	function endScript(){
		die();
	}
}
?>