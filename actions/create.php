<?php

include '../helpers/db.php';

if (isset($_POST['title'])) {
    try {
        $sql = "INSERT INTO `tasks` (`title`) VALUES (?)";
        $stmt  = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 's', $_POST['title']);
        mysqli_stmt_execute($stmt);
        header('location:../index.php');
    } catch (Exception $e) {
        dd($e);
    }
}
