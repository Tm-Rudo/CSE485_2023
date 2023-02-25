<?php
    $id = $_GET['id'];
    require('../includes/connect.php');
    $sql = "delete from baiviet where ma_bviet = '$id'";
    $statement = $conn->query($sql);
    header('location:article.php');
?>