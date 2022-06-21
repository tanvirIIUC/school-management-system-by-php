<?php
    
    $stdname=$_POST['stdname'];
    $stid=$_POST['stid'];
    $bangla=$_POST['bangla'];
    $english=$_POST['english'];
    $math=$_POST['math'];
    $science=$_POST['science'];
    $religion=$_POST['religion'];
    $class=$_POST['class'];
    

$connection=mysqli_connect("localhost","root","","school_management");
mysqli_query($connection,"INSERT INTO student_result(Username,Student_Id,Bangla,English,Math,Science,Religion,Class) 
VALUES('$stdname','$stid','$bangla','$english','$math','$science','$religion','$class')");


header('location:result_post.php');
?>>