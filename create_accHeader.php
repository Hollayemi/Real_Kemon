<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="img/km.png" rel="icon">
	<link rel="stylesheet" href="forgetPassword.css"> 
	<title>Sign Up with Kemon </title>
</head>
<body>

<?php
session_start();
$_SESSION['message']="";
require_once('functions.php');

// require_once('GoogleApi/vendor/autoload.php');
// require_once('GoogleApi/createConfig.php');
// $loginURL = $gClient->createAuthUrl();

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}


$mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
if (isset($_POST['createAcc'])){
	if($_POST['Password']==$_POST['ConfirmPassword']){
		$Username=$mysqli->real_escape_string($_POST['Username']);
		$Firstname=$mysqli->real_escape_string($_POST['Firstname']);
		$Email=$mysqli->real_escape_string($_POST['Email']);
		$Password=md5($_POST['Password']);
		$Phone=$mysqli->real_escape_string($_POST['Phone']);
		$_SESSION['Username']='Username';
		$_SESSION['Email']='Email';
		$pas = $_POST['Password'];
		$sql2="SELECT username,password  FROM users WHERE username='$Username' and password='$Password' or email='$Email' ";
		$run2=mysqli_query($mysqli,$sql2);
		$num_of_rows=mysqli_num_rows($run2);
		if(strlen($pas)>8){
		if(preg_match('([A-Z0-9])',"$pas")){
		if($num_of_rows < 1){
			$sKey = generate_string($permitted_chars, 50);
			$sql="INSERT INTO users (id,username,password, email,phone,sKey) VALUES ('NULL','$Username','$Password','$Email','$Phone','$sKey')";
				$run=mysqli_query($mysqli,$sql);
						if($run){
							$headerErrorInfo = "<div class='headerErrorInfo' style='color:green'>Submitted</div>";
							$Reciever =  $Email;
							$Topic  = "You are welcome to Kemon-Market";
							$content  = "
									<section style='background-color:#000;border:2px solid #570e9b; padding:10px 25px; '>
									<img src=\"cid:myImg\" height='70px' width='150px'>
										<div style='border:1px solid #eee;padding:30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>
										<h2 style='text-align:center;'></h2><br>
										<h4 style='text-align:left; font-size:18px; color:#fff;'>Hello ".$Username."!</h4>
											<h5 style='font-size:15px;font-weight: normal;'>Congratulations for signing up with Kemon, <br> My name is Oluwasusi Stephen and i will be at your service. <br><br>Whenever you are stuck, Kindly reach out to me.<br><br> If
												you have few minutes to spare this week, i will be ecstastic to give you a tour on how to use Kemon-Market. You can as well chat me on<br><br><br> 
												<a style='background-color:#570e9b;color:#fff; padding:12px 18px; border-radius:6px' href='https://api.whatsapp.com/send?phone=+2348147702684&text=Hi,%20from%20Kemon-Market, %20I%20just%20joined%20Kemon%20today.%20my%20name%20is%20__'>Whatsapp </a><br><br><br>or you give me a call
												<br><br><br><a style='background-color:#570e9b;color:#fff; padding:12px 18px; border-radius:6px' href='tel:08147702684'>+2348147702684</a><br><br><br><br> i will be very happy to help you
											</h5>
										</div>
									</section>
								";
							if(MyMailer($Topic,$Reciever,$content)){
								$alertEmail = "An email is on its way to you. <br>Follow the instructions for better knowledge";
							}else{
								
							}
						}else{
							$headerErrorInfo =  "<div class='headerErrorInfo'>Not Submitted</div>";
						}
		}

		else
		{
			$headerErrorInfo = "<div Class='headerErrorInfo'>Account already exist or email has previously been used</div>";

					}
			}else{
		$headerErrorInfo = "<div class='headerErrorInfo'>Upper Case(A-Z) of Number(0-9) must be in your Password</div>";
		}
	}else{
		$headerErrorInfo = "<div class='headerErrorInfo'>Password Less than 8 character</div>";
}
	}else{
		$headerErrorInfo = "<div class='headerErrorInfo'>Password doesn't match</div>";
	}

}
else{
		
}
mysqli_close($mysqli)
?>