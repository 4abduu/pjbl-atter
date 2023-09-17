<?php 
$host="localhost";
$user="root";
$pass="";
$db="atteerr";
$conn=mysqli_connect($host, $user, $pass);
$db_conn = mysqli_select_db($conn, $db);