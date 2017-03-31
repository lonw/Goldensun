<?php
	define('BASEURL',$_SERVER['DOCUMENT_ROOT'].'/');

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'gs';
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_query('SET NAMES UTF8');
	$dbselect = mysql_select_db($dbname);
	require_once BASEURL.'/helpers/helpers.php';

?>
