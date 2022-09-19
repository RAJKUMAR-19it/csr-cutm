<?php
require 'database.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="UPDATE `student` SET `status`='Approved' WHERE id=$id";
    mysqli_query($db,$query);
    header('location:../adminlogin/studentapproval.php');
}
?>