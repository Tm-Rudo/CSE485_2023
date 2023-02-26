<?php
    $title = $_POST['txtTitle'];
    $name = $_POST['txtName'];  
    $category_id = $_POST['category_id'];  
    $summary = $_POST['txtSummary'];  
    $content = $_POST['txtContent'];  
    $author_id = $_POST['author_id'];  
    $img = $_FILES['image_new'];
    if($img['size']>0){
        $file_name = basename($img['name']);
        $folder = '../images/songs/';
        $path_file = $folder . $file_name;
        //die($path_file);
        move_uploaded_file($img['tmp_name'], $path_file);
    }else{
        $file_name = $_POST['image_old'];
        //die($file_name);
    }
    $id =$_POST['id'] ;
    //die($id);
    $author = [
        'title'       => $title,
        'name'        => $name,
        'category_id'        => $category_id,
        'summary'        => $summary,
        'content'        => $content,
        'author_id'        => $author_id,
        'img'        => $file_name,
    ]; 
    //echo json_encode($author);
    require('../includes/connect.php');
    // $sql = "insert into baiviet(tieude,ten_bhat,ma_tloai,tomtat,noidung,ma_tgia,hinhanh) 
    // values (:title, :name, :category_id, :summary, :content, :author_id, :img)";
    $sql = "UPDATE baiviet
            SET tieude = :title ,ten_bhat = :name, ma_tloai = :category_id, tomtat = :summary, noidung = :content, ma_tgia = :author_id, hinhanh = :img
            WHERE ma_bviet = '$id';";

    require('../includes/functions.php');
    try {                                             // Start try block to run SQL
        pdo($conn,$sql, $author);
        header('location:article.php');
    } catch (PDOException $e) {  
        echo $e->getMessage();
    }
    
?>