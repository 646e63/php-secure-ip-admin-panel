<?php 
/*
# Admin Panel Ip Security
# Coded By 646e63
# © SpyCod3 Group
# 646e63 - Antidote - Fenerove - Ne0-h4ck3r
*/

$my_ip = "127.0.0.1";
$control = $_SERVER['REMOTE_ADDR'];
if($my_ip == $control){
	echo "Welcome, Admin";
	// Admin panel codes here
}else{
	header("Location:index.php"); //Redirects to home if ip address does not match
}

?>
