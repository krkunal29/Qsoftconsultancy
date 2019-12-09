<?php
include "connection.php";

$name 		 = $_POST['name'];
$email 		 = $_POST['email'];
$contact 	 = $_POST['contact'];
$fileName = basename($_FILES['file']['name']);

// echo $name;
// echo $email;

// echo $contact;
// echo $fileName ;

$sql = "INSERT INTO career(name,email,contact,filename) VALUES('$name','$email','$contact','$fileName')";
mysqli_query($con,$sql);

 ?>
