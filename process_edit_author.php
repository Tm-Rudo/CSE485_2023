<?php
$id = $_POST['txtAutId'];
$name = $_POST['txtAutName'];
require('../includes/includes/connect.php');
// $sql = "insert into tacgia(ten_tgia) values (:name)";

$sql = "UPDATE tacgia
            SET ten_tgia = :name WHERE ma_tgia = '$id';";
require('../includes/includes/functions.php');
try {                       
    //sửa tên                      // Start try block to run SQL
    pdo($conn,$sql, ['name' => $name]);
    header('location:author.php');
} catch (PDOException $e) {  
    echo $e->getMessage();
}
