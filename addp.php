<?php 
session_start();
$cnn=mysqli_connect('localhost','root','','gym');

	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$name = $_POST['name'];
		$price = $_POST['price'];
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        $quantity = 20;
		if(!empty($name) && !is_numeric($name))
		{
			$query = "INSERT INTO package (name , price, starth, endh, quantity) VALUES ('$name','$price','$stime','$etime','$quantity')";

			mysqli_query($cnn, $query);

			echo "You succesfully added package";
            header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>