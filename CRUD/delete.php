<?php
require 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tb_user` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location: display.php');
    }else{
        die(mysqli_error($conn));
    }
    
}
?>