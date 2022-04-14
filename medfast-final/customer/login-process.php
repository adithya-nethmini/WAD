<?php

$username = $_POST['username'];
$password = md5($_POST['password']);

include('includes/connect.php');

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

$query = mysqli_query($con, "SELECT id, username, password, name, login_type FROM user_login WHERE username = '$username' AND password = '$password'") or die("User Not found");
$result = mysqli_fetch_array($query);

if($result['username'] == $username && $result['password'] == $password ) {
	session_start();
	$_SESSION['login_type'] = $result['login_type'];
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $result['name'];
	$login_type = $_SESSION['login_type'];
	$name = $_SESSION['name'];

	

	header("Location: ../user.php "); die;
}

else {
	header("Location: login-error.php");
}

?>