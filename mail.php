<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$mailheader ="From:".$fname."<".&lname.">\r\n" ;


$recipient = "nikhil.dhiman@brainminetech.com";


mail($recipient, $email, $message, $mailheader)
or die("Error!");

echo"message send";
?>