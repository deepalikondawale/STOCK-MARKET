<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','stock');

// get the post records
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `message` (`message_id`, `username`, `email`, `message`) VALUES ('0', '$username', '$email', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);


	if( $rs ) {
      if( $rs ) 
        echo "<script type='text/javascript'>alert('Message Submitted Successfully!');document.location='welcome.php'</script>";
      else
        echo "<script type='text/javascript'>alert('Failed!')</script>";
    }
require_once "../visiting_pages/visitor.php";
?>