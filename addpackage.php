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
    <link href="maincss.css" rel="stylesheet">
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
    <form action="addp.php" method="post">
    <div class="form-control"><header>Add Package</header></div>
    <div class="form-control">
        <input type="text" name="name" required="">
        <label>
            <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">e</span>
        </label>
    </div>
    <div class="form-control">
        <input type="number" name="price" required="">
        <label>
            <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">r</span><span style="transition-delay:100ms">i</span><span style="transition-delay:150ms">c</span><span style="transition-delay:200ms">e</span>
        </label>
    </div>
    <div class="form-control">
        <input type="time" name="stime" required="">
    </div>
    <div class="form-control">
        <input type="time" name="etime" required="">
    </div>
        <div class="form-control">
    <button type="submit">Add Package</button>
</div>
    </form>
    <footer>&copy; 2022 ErenDev</footer>
</body>
</html>

