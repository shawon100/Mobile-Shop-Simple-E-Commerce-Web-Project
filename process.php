<?php

session_start();
error_reporting(0);
require_once("config.php");

$uname=$_POST['un'];
$pw=$_POST['ps'];
$pw=md5($pw);



$lq="SELECT * FROM `users` WHERE name='$uname' AND password='$pw'";

$sq=mysqli_query($con,$lq);

$row=mysqli_fetch_array($sq);





if(!empty($row))
{
	

	if($uname==$row[name] && $row[password]==$pw)
	{
       
       
           $_SESSION=array();

           $_SESSION['un']=$row[name];
            $_SESSION['ps']=$row[password];

            header("Location:index.php");

            



	}
	else
	{
		 header("Location:login.php?value=fail");
		 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
         //echo("Wrong Username And Password");
         echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
	}


}
else
{
	 header("Location:login.php?value=fail");
	 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
	// echo("Wrong Username And Password");
	  echo '<script language="javascript">';
		 echo 'alert("Wrong Username And Password")';
		  echo '</script>';
}



?>
