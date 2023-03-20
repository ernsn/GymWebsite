<?php

function check_login($cnn)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "SELECT * FROM gymdb WHERE id = '$id' limit 1";

		$result = mysqli_query($cnn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$id = mysqli_fetch_assoc($result);
			return $id;
		}
	}
	header("Location: signin.html");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 

		$text .= rand(0,9);
	}

	return $text;
}