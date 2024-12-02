<?php
include '../helpers/db.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    $sql = "UPDATE `tasks` SET `status` ='$status' WHERE `id` = $id";
    $query = mysqli_query($conn, $sql);

    $mytask = mysqli_query($conn, "SELECT * FROM `tasks` WHERE `id` = $id");
    $task = mysqli_fetch_assoc($mytask);
    echo json_encode($task['status']);
}
