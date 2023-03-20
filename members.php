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
    <th>Selection</th>
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
    <th><input type="checkbox" name="eren" value="<?php echo $row["no"]; ?>"></th>
</tr>
<?php
$i++;
}
?>
</table>
<div id="result" style="font-size: 20px;"></div>
 <?php
}
else{
    echo "No result found";
}
?>
</table>
<button class="button1" onclick="displayRadioValue()">Choose</button>     
</section>
    <script>
        function displayRadioValue() {
            var ele = document.getElementsByName('eren');
              
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked){
                document.getElementById("result").innerHTML
                        = "You chose package numbered: "+ele[i].value;
                        <?php $query="UPDATE package SET quantity = quantity - 1 WHERE no > 0";
                         mysqli_query($cnn, $query);
                         ?>
                }
            }
        }
    </script>

</body>
</html>