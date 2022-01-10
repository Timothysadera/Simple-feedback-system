<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','feedback');

// get the post records

$sno = $_POST['sno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `users` (`sno`, `firstname`, `lastname`, `email`, `phone`, 'message') VALUES ('$sno', '$firstname', '$lastname', '$email', '$phone', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
