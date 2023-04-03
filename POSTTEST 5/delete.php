<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($connect, 
        "DELETE FROM member_web WHERE id='$id'");
    if($result){
        header("Location:akses.php");
    }
}