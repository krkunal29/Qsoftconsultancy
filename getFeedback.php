<?php
include "connection.php";

$name 		 = $_POST['name'];
$email 		 = $_POST['email'];
$subject 	 = $_POST['subject'];
$message	 = $_POST['message'];

$sql = "INSERT INTO contacts(contact_person,email,subject,message) VALUES('$name','$email','$subject','$message')";
mysqli_query($con,$sql);

 ?>
