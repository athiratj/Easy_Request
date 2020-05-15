<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="profile.css" rel="stylesheet" type="text/css">
<link href="table.css" rel="stylesheet" type="text/css">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<table align='center' border='0' class="blueTable">
<tr>
      <th>Name</th>
      <th>Type of the request</th>
      <th>View</th>
      
    </tr>
<?php
session_start();
$i=0;
$error = ''; // Variable To Store Error Message
$row=$_SESSION['row'];
$conn = mysqli_connect("localhost", "root", "", "er");
$sql="SELECT * from request where class ='$row[class]' ";
$result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0)
        {
            while($array=mysqli_fetch_assoc($result)) 
        {
            $i++;
            $sql1="UPDATE request SET no = '$i' WHERE id ='". $array['id'] ."'";
            if ($conn->query($sql1) === TRUE) {
            echo "<tr>";
            echo "<td>" . $array['name'] . "</td>"; 
            echo "<td>" . $array['type'] . "</td>"; 
            $_SESSION['array']=$array;
            $_SESSION['i']=$i;
            echo "<form method='post'action='view.php'> <td><input type='submit'  value='View' name='$i'/></td></form>"; 
            }
            
        }
        }
?>
<a href="adviser.php"><input type='button' value='BACK'></a>
