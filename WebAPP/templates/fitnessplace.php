<?php
SESSION_START();
$dt= date('Y-m-d H:i:s');
$user=$_SESSION['user'];
$city=$_REQUEST["city"];
$country=$_REQUEST["country"];
$conn=mysqli_connect("localhost","root","","pcoded");
if($conn)
{
	$q="insert into fitnessplace values('$dt','$user','$city','$country')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:fitness.php");
	}
	
}



?>