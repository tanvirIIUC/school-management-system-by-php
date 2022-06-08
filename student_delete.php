<?php
session_start();
$connection=mysqli_connect('localhost','root','','school_management');
$id=$_GET['id'];
 
$result=mysqli_query($connection,"DELETE  FROM student_info WHERE id='$id'");
if($result)
{
    $_SESSION['success']='success';
    header("Location:studentlist.php");
}else{
    $_SESSION['success']='failed';
}
?>