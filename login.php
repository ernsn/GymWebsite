<?php 

session_start();

$cnn=mysqli_connect('localhost','root','','gym');
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$un = $_POST['un'];
		$pw = $_POST['pw'];

		if(!empty($un) && !empty($pw) && !is_numeric($un))
		{

			$query = "SELECT * FROM gymdb WHERE username = '$un' limit 1";
			$result = mysqli_query($cnn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $pw)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			header("Location: signin.html");
			echo "Please enter username or password!";
		}else
		{
			header("Location: register.html");
			echo "wrong username or password!";
		}
	}

?>
