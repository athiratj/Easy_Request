<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "er");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['adviser'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from login where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);

$desig = $row['desig'];
$sql = "SELECT * from $desig where username = '$user_check'";
$ses_sql = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($ses_sql);
if($desig=='ADVISER')
{
    $login_session = $row['name'];
    $usid = $row['id'];
    $class = $row['class'];
    $ph = $row['ph'];
    $em = $row['em'];
}