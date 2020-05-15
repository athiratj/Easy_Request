<?php
$error = ''; // Variable To Store Error Message
$row=$_SESSION['row'];
if (isset($_POST['submit'])) 
    {
        if (empty($_POST['req'])) 
        {
        $error = "None of the form selected";
        echo '<script type="text/javascript">window.onload = function () { alert("None of the form selected"); }</script>';

        }
        else{
        $conn = mysqli_connect("localhost", "root", "", "er");
        $req=mysqli_real_escape_string($conn,$_POST['req']);
        $sql="INSERT INTO request (type,name,idkno,class,em,ph,dept) VALUES ('".$req."','".$row['name']."','".$row['idkno']."','".$row['class']."','".$row['em']."','".$row['ph']."','".$row['dept']."')";
        if ($conn->query($sql) === TRUE) {
            echo '<script type="text/javascript">window.onload = function () { alert("Request Submitted successfully"); }</script>';
        } else {
            echo '<script type="text/javascript">window.onload = function () { alert("None of the form selected"); }</script>';

        }
    }}
    $conn->close();
  ?>