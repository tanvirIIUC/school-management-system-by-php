<?php
	session_start();
    $connection=mysqli_connect('localhost','root','','school_management');
    $id=$_GET['id'];
    
    $notice=$_POST['notice'];
    
 
	mysqli_query($connection,"update notice set notice='$notice' where id='$id'");
	header('location:admin_page.php');
?>