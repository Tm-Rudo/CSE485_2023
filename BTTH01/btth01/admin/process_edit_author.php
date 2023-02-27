<?php
$id = $_POST['txtAutId'];
$name = $_POST['txtAutName'];
$img = $_FILES['Image'];
    if($img['size']>0){
        $file_name = basename($img['name']);
        $folder = '../images/songs/';
        $path_file = $folder . $file_name;
        move_uploaded_file($img['tmp_name'], $path_file);
    }else{
        $file_name = $_POST['Image'];
}

$author = [
    'name'        => $name,
    'img'        => $file_name,
]; 

require('../includes/connect.php');
// $sql = "insert into tacgia(ten_tgia) values (:name)";

$sql = "UPDATE tacgia
            SET ten_tgia = :name, hinh_tgia = :img WHERE ma_tgia = '$id';";
require('../includes/functions.php');
try {                       
    //sửa tên                      // Start try block to run SQL
    pdo($conn,$sql, $author);
    header('location:author.php');
} catch (PDOException $e) {  
    echo $e->getMessage();
}
