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
	<title>student_login</title>
</head>
<body>
	
<?php

if(isset($_POST['stdid'])){
   $std_id= $_POST['stdid'];
   $std_pass= $_POST['pass'];

   $connection=mysqli_connect("localhost","root","","school_management");
   $sql= (" SELECT * FROM student_info WHERE Student_Id='$std_id' AND Password='$std_pass' ");

    $query=$connection->query($sql);
   if(mysqli_num_rows($query)>0){
	  header('location:student_page.php');

   }
   else echo 'Wrong Password Or id';

}


?>

<section class="navi"> 
    

       <div class="brnd">
       <a class="active" href="#home"><b><em>Admin</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="student_login.php"><b><em>Student</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#contact"><b><em>Teacher</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#about"><em><b>About</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>
       
</section> 
<br><br>
<form action="" method="POST">
   

<div class="card">
  <h5 class="card-header">student login</h5>
  <div class="card-body">
  <p>
             <label style="color: #002147;">Id</label>
             <input type="text" name="stdid" required>
         </p>
         
         <p>
             <label>password<span>(at least 5 characters)</span></label>
             <input type="password" name="pass" minlength="5" required/>
         </p>

	<input class="btn btn-primary" type="submit" value="Submit">
    <a href="student_create.php" class="btn btn-primary">create</a>
  </div>
</div>

</body>
</html>