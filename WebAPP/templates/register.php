<?php
$type=$_REQUEST['type'];
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$confirm_password=$_REQUEST["confirm_password"];
$conn=mysqli_connect("localhost","root","","pcoded");
if($conn)
{
	$q="insert into user values('$type','$username','$password','$confirm_password','$email')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:login.php");
	}
	else
	{
		echo "<script>alert('Email id already in use')</script>";
	}
}

?>