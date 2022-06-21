<?php
    
        $tname=$_POST['tname'];
        $tid=$_POST['tid'];
        $tphn=$_POST['phone'];
        $temail=$_POST['email'];
        $tgnde=$_POST['gender'];
        $tdstc=$_POST['distric'];
        $tpass=$_POST['pass'];
        

    $connection=mysqli_connect("localhost","root","","school_management");
    mysqli_query($connection,"INSERT INTO teacher_info(Username,T_id,Phone,Email,Gender,District,Password) 
    VALUES('$tname','$tid','$tphn','$temail','$tgnde','$tdstc','$tpass')");
header('location:teacher_creat.php');
    ?>