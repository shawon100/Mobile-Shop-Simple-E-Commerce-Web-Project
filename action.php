<?php

require_once("config.php");

$user=$_POST['uname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];

$query="INSERT into users(name,password,email,phone) VALUES('$user','$password','$email','$phone')";
$sq=mysqli_query($con,$query);



if($sq)
{
	header("Location:login.php");
}
else
{
	echo("Failed<br>");
}






?>
