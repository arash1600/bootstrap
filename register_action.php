<?php
include("header.html");
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","lo");
mysqli_query($c,"INSERT INTO `login` (`name`, `email`, `password`) 
VALUES ('$name', '$email', '$password');");
mysqli_close($c);

echo("ثبت نام شما با موفقیت انجام شد ✅");
include("footer.html");
?>