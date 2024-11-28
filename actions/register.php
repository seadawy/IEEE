<?php

include "db.php";

if (empty($_REQUEST) || $_REQUEST == null || count($_REQUEST) == 0) {
    header("location:index.php");
}

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('{$username}','{$email}','{$password}')";
$query1 = mysqli_query($conn, $sql);

dd($query1);
