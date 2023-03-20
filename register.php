<?php 
session_start();
$cnn=mysqli_connect('localhost','root','','gym');

	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
        $nm=filter_input(INPUT_POST, 'name');
        $sm=filter_input(INPUT_POST, 'surname');
        $dob=date('d-m-y', strtotime($_POST['dob']));

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$id = random_num(20);
			$query = "INSERT INTO gymdb (username , password, name, surname, dob, id) VALUES ('$username','$password','$nm','$sm','$dob','$id')";

			mysqli_query($cnn, $query);

			header("Location: signin.html");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>