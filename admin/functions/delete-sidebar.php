<?php
include('../../inc/config.php');
include('../check-login.php');

$id = $_GET['id'];

$query = mysql_query("delete from sidebar where id='$id'") or die(mysql_error());

if ($query) {
    header('location:../sidebar.php?message=delete');
}
?>
