<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $record = mysqli_fetch_array(mysqli_query($connect, 
        "SELECT * FROM member_web WHERE id='$id'"));
    $result = mysqli_query($connect, 
        "DELETE FROM member_web WHERE id='$id'");
    if (unlink("pelanggan/{$record['picture']}")){
        if($result){
        header("Location:akses.php");
    }}
}