<?php
$firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','users');
$mysql -> query("INSERT INTO `users`(`firstname`,`lastname`,`username`,`password`,`email`) VALUES('$firstname','$lastname','$username','$password','$email')");
$mysql ->close();

header('Location: auth.php');

?>
