<?php
    $id = $_GET['id'];
    require('../includes/connect.php');
    $sql = "delete from theloai where ma_tloai = '$id'";
    $statement = $conn->query($sql);
    header('location:category.php');
?>