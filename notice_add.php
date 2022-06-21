

<?php
    
    $notice=$_POST['notice'];

$connection=mysqli_connect("localhost","root","","school_management");
mysqli_query($connection,"INSERT INTO notice(notice) 
VALUES('$notice')");
header('location:admin_page.php');

?>
