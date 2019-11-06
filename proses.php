<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
        $code_book    = $_POST['code_book'];
        $title_book   = $_POST['title_book'];
        $author       = $_POST['author'];
        $total_pages  = $_POST['total_pages'];
        $fl_name      = $_FILES['images']['name'];
        $size         = ($_FILES['images']['size'] / 1024);
        $fl_type      = $_FILES['images']['type'];
        $target_dir   = "images/";
        $tmp_name     = $_FILES["images"]["tmp_name"];
        $destination = $target_dir . $fl_name;
        move_uploaded_file($tmp_name, $destination);

        if($fl_type=="image/jpeg" || $fl_type == "image/png"){
            $db->input($code_book,$title_book,$author,$total_pages,$fl_name);
            header("location:index.php");
        }else{
            header("location:index.php");
            echo "<script>alert('Invalid Format Image')</script>";
            
           
        }

    
     
 }
 elseif($aksi == "hapus"){ 	
 	    $db->hapus($_GET['id']);
        header("location:index.php");
    
 }
 elseif($aksi == "update"){
        $code_book    = $_POST['code_book'];
        $title_book   = $_POST['title_book'];
        $author       = $_POST['author'];
        $total_pages  = $_POST['total_pages'];
        $fl_name      = $_FILES['images']['name'];
        $size         = ($_FILES['images']['size'] / 1024);
        $fl_type      = $_FILES['images']['type'];
        $target_dir   = "images/";
        $tmp_name     = $_FILES["images"]["tmp_name"];
        $destination = $target_dir . $fl_name;
        move_uploaded_file($tmp_name, $destination);

        if($fl_type=="image/jpeg" || $fl_type == "image/png"){
            $db->update($code_book,$title_book,$author,$total_pages,$fl_name);
            header("location:index.php");
        }else{
            header("location:index.php");
            echo "<script>alert('Invalid Format Image')</script>";
            
        
        }
 	
 }
?>