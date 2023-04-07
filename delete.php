<?php

$servername="localhost";
$username="root";
$password="";
$database="GYM";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("sorry! we failed to connect" . mysqli_connect_error());
}

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `customers` WHERE `customers`.`c_no` = '$id'";
    $result=mysqli_query($conn,$sql);
    if ($result) {
    header('location:updel.php');
    }
    else {
        echo "deletion is not successfull";
    }
}
 ?>