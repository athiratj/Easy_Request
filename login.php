<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "er");
// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * from login where username='$username' AND password='$password' ";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
			if($row["desig"]=="student"){
				$_SESSION['login_user']=$row['username'];
				header('location: profile.php');
			}
			elseif($row["desig"]=="adviser"){
				$_SESSION['login_user']=$row['username'];
				header('location: adviser.php');
			}
			elseif($row["desig"]=="hod"){
				$_SESSION['login_user']=$row['username'];
				header('location: hod.php');
			}
			else{
				$_SESSION['login_user']=$row['username'];
				header('location: pri.php');
			}
	}
}

mysqli_close($conn); // Closing Connection
}
}
?>