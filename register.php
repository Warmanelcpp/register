<?php
$name = $_POST['first_name'];
$email = $_POST['mail'];
$password = $_POST['user-password'];
$password_confirm = $_POST['password_confirm'];
$last_name= $_POST['last_name'];
$phone = $_POST['phone'];

echo "<h1>Informations:</h1>";
echo "Name: " .$name. "<br>";
echo "Last Name: " .$last_name. "<br>";
echo "E-mail: " .$email. "<br>";
echo "Password: " .$password. "<br>";
echo "Phone: ".$phone;
?>