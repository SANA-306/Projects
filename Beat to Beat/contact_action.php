<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["msg"];
require("connect.php");
$query="insert into cont(Name,Email,Msg)values('$name','$email','$msg')";
$run=mysqli_query($con,$query);

if($run>0)
{
	echo "<script>alert('submitted succesfully');</script>";
	
	echo "<script>window.location='contact1.php';</script>";

}

?>