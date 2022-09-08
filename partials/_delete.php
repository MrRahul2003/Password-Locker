<?php
    // connection to db
    include '_connect.php';

    $data_index = $_GET['data_index'];
    echo $data_index;

    // deleting data in db
    $sql = "DELETE FROM `data` WHERE data_index='$data_index'";
    $result = mysqli_query($conn,$sql);

    // checking insertion condition
    if (!$result) {
        echo "cannot be deleted";
    } else {
        echo "Deleted";
        header("location:../index.php");
        exit();
    }
?>