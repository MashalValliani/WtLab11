<?php


if($_POST["username"] == "Mashal" && $_POST["password"] == "16SW158"){
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies set Successfully<br>";
	echo "Welcome: ".$_COOKIE["username"]." With Rollno ".$_COOKIE["password"];

}else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
 }
 else{
 	echo "Please Enter correct username and password";
 }
?>
 
<p><a href="page.php"> Go to Login Page </a> </p>