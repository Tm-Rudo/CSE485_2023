<?php
    $name = $_POST['txtCatName'];  
    $id =$_POST['txtCatId'] ;
    echo($id);
    // $category = [
    //     'name'        => $name,
    // ]; 
    require('../includes/connect.php');
    $sql = "insert into theloai(ten_tloai) values (:name)";
    $sql = "UPDATE theloai
            SET ten_tloai = :name WHERE ma_tloai = '$id';";
    //die($sql);
    require('../includes/functions.php');
    try {                                             // Start try block to run SQL
        pdo($conn,$sql, ['name' => $name]);
        header('location:category.php');
    } catch (PDOException $e) {  
        echo $e->getMessage();
    }
    
?>