<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style_home.css">
	<title>teacherlist</title>
</head>
<body>
	

<section class="navi">   
       <div class="brnd">
       <a class="active" href="home.php"><b><em>Home</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- <a href="admin_page.php"><b><em>Admin</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href=""><b><em>Teacher</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="home.php"><em><b>About</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>     
</section> 
<br><br>

<?php

$connection=mysqli_connect('localhost','root','','school_management');

$query=mysqli_query($connection,"SELECT * FROM teacher_info");
 
 

?>

  <h1 style=" text-align:center"><em>Teacher list</em></h1>
 <table class="table table-dark table-hover" border="2" cellspacing="7"> 
 <tr> 
    <td>ID</td>
    <td>Username</td>
    
    <td>Phone</td>
    <td>Email</td>
    <td>Gender</td>
    <td>District</td>
    
</tr> 
 
<?php

while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
    ?>
    <tr>
   
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['Username']?></td>
    
    <td><?php echo $row['Phone']?></td>
    <td><?php echo $row['Email']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['District']?></td>
    
    
    
    
</tr>
    <?php
}
?>
</table>



</body>
</html>