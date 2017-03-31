<?php
//panggil file config.php untuk menghubung ke server
include('../../inc/config.php');

//tangkap data dari form
$title = $_POST['desc'];

//submit data ke database
$query = mysql_query("UPDATE news SET title='$title' where id = 2 ") or die(mysql_error());

if ($query) {
    header('location:../news.php');
}
?>
