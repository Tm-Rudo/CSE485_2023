<?php
    $id = $_GET['id'];
    require('../includes/includes/connect.php');
    $sql = "delete from tacgia where ma_tgia = '$id'";
    $statement = $conn->query($sql);
    header('location: author.php');
?>