<?php
$mySqlDateTime = date('Y-m-d H:i:s');

SESSION_START();
$age=$_REQUEST['age'];
$work=$_REQUEST['work'];
$marital=$_REQUEST['marital'];
$kids=$_REQUEST['kids'];
$us=$_SESSION['user'];
$name=$_SESSION['name'];
$physic=$_REQUEST['physic'];
$scanning=$_REQUEST['scanning'];
$period=$_REQUEST['period'];
$irregular=$_REQUEST['irregular'];
$painful=$_REQUEST['painful'];
$excessive=$_REQUEST['excessive'];
$often=$_REQUEST['often'];
$last=$_REQUEST['last'];
$rate=$_REQUEST['rate'];
$clots=$_REQUEST['clots'];
$alcohol=$_REQUEST['alcohol'];
$smoking=$_REQUEST['smoking'];
$stress=$_REQUEST['stress'];
$excercise=$_REQUEST['excercise'];
$mother=$_REQUEST['mother'];
$diabetes=$_REQUEST['diabetes'];
$hyperthyroidism=$_REQUEST['hyperthyroidism'];
$hair=$_REQUEST['hair'];
$acne=$_REQUEST['acne'];
$conn=mysqli_connect("localhost","root","","pcoded");
if($conn)
{
	$conn=mysqli_connect("localhost","root","","pcoded");

	$q="insert into question values('$mySqlDateTime','$us','$age','$work','$marital','$kids','$physic','$scanning','$period','$irregular','$painful','$excessive','$often','$last','$rate','$clots','$alcohol','$smoking','$stress','$excercise','$mother','$diabetes','$hyperthyroidism','$hair','$acne')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:prediction.php");
	}
	else
	{
		echo "<script>alert('Email id already in use')</script>";
	}
}

?>