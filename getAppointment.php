<?php
include "connection.php";

$name 		 = $_POST['name'];
$email 		 = $_POST['email'];
$contact 	 = $_POST['contactno'];
$message	 = $_POST['message'];
$date      = $_POST['date1'];
$time      = $_POST['time1'];
if(empty($message))
{
  $message = "None";
}
echo $name;
echo $email;
echo "<br>";
echo $contact;
echo "<br>";
echo $date;
echo "<br>";
echo $time;
$sql = "INSERT INTO Meetings(name,email,contact,date1,time1,message) VALUES('$name','$email','$contact','$date','$time','$message')";
mysqli_query($con,$sql);

 ?>
