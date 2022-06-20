<?php
	session_start();
    $connection=mysqli_connect('localhost','root','','school_management');
    $id=$_GET['id'];
    
    $stdname=$_POST['stdname'];
    $stid=$_POST['stid'];
    $bangla=$_POST['bangla'];
    $english=$_POST['english'];
    $math=$_POST['math'];
    $science=$_POST['science'];
    $religion=$_POST['religion'];
    
 
	mysqli_query($connection,"update student_result set Username='$stdname',Student_Id='$stid',Bangla='$bangla',English='$english',Math='$math',Science='$science',Religion='$religion' where id='$id'");
	header('location:result_show.php');
?>