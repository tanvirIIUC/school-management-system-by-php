<?php
    
        $stdname=$_POST['stdname'];
        $studentid=$_POST['stdid'];
        $studentphn=$_POST['phone'];
        $studentemail=$_POST['email'];
        $studentgnde=$_POST['gender'];
        $studentdstc=$_POST['distric'];
        $studentpass=$_POST['pass'];
        $studentclas=$_POST['stdcls'];

    $connection=mysqli_connect("localhost","root","","school_management");
    mysqli_query($connection,"INSERT INTO student_info(Username,Student_Id,Phone,Email,Gender,District,Password,Class) 
    VALUES('$stdname','$studentid','$studentphn','$studentemail','$studentgnde','$studentdstc','$studentpass','$studentclas')");
 
 header('location:student_create.php');


    ?>