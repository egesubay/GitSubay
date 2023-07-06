<?php
include 'MysqlConnections.php';
$username = $_POST['username'];
$password = $_POST['password'];
session_start();

if(isset($_POST['login'])){

$loginselectsql="SELECT * FROM login WHERE username = '$username ' AND password = '$password'";
$loginquery=mysqli_query($conn, $loginselectsql);

$row=mysqli_fetch_array($loginquery);

if(is_array($row)){
    $_SESSION['username']=$row ['username'];
    $_SESSION['password']=$row ['password'];
    header("location: ../Pages/Main.php");
}

else{
    header("location:../pages/login.php");
}}
