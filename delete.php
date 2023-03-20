<?php 
session_start();
$cnn=mysqli_connect('localhost','root','','gym');
	include("functions.php");
	$user_data = check_login($cnn);
    $result = mysqli_query($cnn,"SELECT * FROM package");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="k8B2z8FL-sU0BZY8hI8QNM5kW_eiDMQ2VOlwnCqD2Ao" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GymEren</title>
    <link rel="stylesheet" href="maincss.css">
    <style>
    tr:hover {background-color: #bb802b;color: black;}
    table, td, th {  
        border: 1px solid #bb802b;
        text-align: left;
      }
      
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      th, td {
        padding: 15px;
        font-size: 20px;
      }
      </style>
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
 
    <section class="par" id="middle">
    <?php
if (mysqli_num_rows($result) > 0) {
?>
    <table>
  <tr>
    <th>Packet No</th>
    <th>Packet Name</th>
    <th>Price</th>
    <th>Start Hour</th>
    <th>End Hour</th>
    <th>Operation</th>
  </tr>
  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <th><?php echo $row["no"]; ?></th>
    <th><?php echo $row["name"]; ?></th>
    <th><?php echo $row["price"]; ?></th>
    <th><?php echo $row["starth"]; ?></th>
    <th><?php echo $row["endh"]; ?></th>
    <td><form method="POST" action="del.php"><input name="rno" type="hidden" value="<?php echo $row["no"];?>"><button class="button1" type="submit" value="Delete">Delete</button></form></td>        
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</table>
    </section>


</body>
</html>