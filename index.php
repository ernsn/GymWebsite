<?php 
session_start();
$cnn=mysqli_connect('localhost','root','','gym');
	include("functions.php");
	$user_data = check_login($cnn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="k8B2z8FL-sU0BZY8hI8QNM5kW_eiDMQ2VOlwnCqD2Ao" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>


<head>
    <title>GymEren</title>
    <link rel="stylesheet" href="maincss.css">
</head>
<body>
    <header>
        <nav>
            <ul class="topnav">
                <li class="logo"><a href="index.php"></a></li>
                <li><a href="signin.html">SIGN IN</a></li>
                <li><a href="members.php">MEMBERS</a></li>
                <li><a href="addpackage.php">ADD PACKAGE</a></li>
                <li><a href="delete.php">LIST PACKAGE</a></li>
                <li><a class="mybutton" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <header class="home">
            NO PAIN, NO GAIN!
        </header>
        <a class="mybutton" href="#middle">Learn more.</a>
    </section>

    <section>
        <div class="row">
            <div class="row">
                <img src="pic1.jpg" style="width:50%">
            </div>
            <div class="row">
                <img src="pic2.jpg" style="width:50%">
            </div>
        </div>
    </section>

    <section class="par" id="middle">
        <header>
            WELCOME!
        </header>
        <nav>
            Hello welcome to GymEren our gym is located on İzmir/Karşıyaka <br>
            and we are happy to give you best experience of gym you dream. <br>
        </nav>
        <ul>
            <a class="mybutton" href="signin.html">SIGN IN</a>
            <a class="mybutton" href="members.php">MEMBERS</a>
            <a class="mybutton" href="addpackage.php">ADD PACKAGE</a>
            <a class="mybutton" href="delete.php">LIST PACKAGE</a>
        </ul>
    </section>

    <footer>&copy; 2022 ErenDev</footer>
</body>
</html>