<?php

$host="localhost";
$user="root";
$pass="";
$db="mshop";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{

	echo("Not Connected<br>".mysql_error());
}
else
{
	//echo("Connected");
}