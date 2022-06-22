<?php
	session_start();
    $connection=mysqli_connect('localhost','root','','school_management');
    $id=$_GET['id'];
    
    $sname=$_POST['stdname'];
    $sid=$_POST['stdid'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $distric=$_POST['distric'];
    $pass=$_POST['pass'];
    
 
	mysqli_query($connection,"update student_info set Username='$sname',Student_Id ='$sid',Phone='$phone',Email='$email',Gender='$gender',District='$distric',Password='$pass' where id='$id'");
	header('location:studentlist.php');
?>