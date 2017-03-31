<?php
//panggil file config.php untuk menghubung ke server
include('../../inc/config.php');

//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

//submit data ke database
$query = mysql_query("INSERT INTO `users`(`username`, `password`) VALUES ('$username', '$password')") or die(mysql_error());

if ($query) {
    header('location:../user.php?message=success');
}
?>
