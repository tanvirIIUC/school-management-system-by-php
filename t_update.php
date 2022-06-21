<?php
	session_start();
    $connection=mysqli_connect('localhost','root','','school_management');
    $id=$_GET['id'];
    
    $tname=$_POST['tname'];
    $tid=$_POST['tid'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $distric=$_POST['distric'];
    $pass=$_POST['pass'];
    
 
	mysqli_query($connection,"update teacher_info set Username='$tname',T_id ='$tid',Phone='$phone',Email='$email',Gender='$gender',District='$distric',Password='$pass' where id='$id'");
	header('location:teacherlist.php');
?>