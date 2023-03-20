<?php 
session_start();
$cnn=mysqli_connect('localhost','root','','gym');
	include("functions.php");
	$user_data = check_login($cnn);
$no = $_POST['rno'];
$update = $cnn->prepare("DELETE FROM package WHERE no = ?");
$update->bind_param('i', $no);
$update->execute();
header("Location: delete.php");
?>