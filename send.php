<?php
session_start();
$row=$_SESSION['arr'];
echo($row['id']);
$conn = mysqli_connect("localhost", "root", "", "er");
$sql="INSERT INTO r1 (type,name,idkno,class,em,ph,dept) VALUES ('".$row['type']."','".$row['name']."','".$row['idkno']."','".$row['class']."','".$row['em']."','".$row['ph']."','".$row['dept']."')";
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">window.onload = function () { alert("Request Forwarded successfully"); }</script>';
    $sql="DELETE FROM request WHERE id ='".$row['id']."'";
    if ($conn->query($sql) === TRUE) {
  }
header('location: rva.php');
}
?>