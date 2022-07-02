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
session_start();
if(isset($_POST['submit'])){
   
   $std_id=   $_POST['stdid'];
   $std_pass= $_POST['pass'];

   $connection=mysqli_connect("localhost","root","","school_management");
   $sql= (" SELECT * FROM student_info WHERE Student_Id='$std_id' AND Password='$std_pass' ");

    $query=$connection->query($sql);
   if(mysqli_num_rows($query)>0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['s_id']= $row['Student_Id'];
	  header('location:student_profile.php');

   }
    // else echo 'Wrong Password Or id';
     else{
    $message[] = 'incorrect email or password!';
     }
}


?>

<section class="navi"> 
    

       <div class="brnd">
       <a class="active" href="home.php"><b><em>Home</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- <a href="student_login.php"><b><em>Student</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="teacher_login"><b><em>Teacher</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="home.php"><em><b>About</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>
       
</section> 
<br><br>
<form action="" method="POST">
   



<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       
        <img src="ab2.jpg" class="card-img-top" alt="...">
        
      </div>
    </div>
  </div>
  <div  class="col-sm-6">
    
    <div class="card">
      
      <div class="card-body" style=" background-color: #002147;">
        <h5 style="color:rgb(250, 250, 252);" class="card-title">student login</h5>
        <p>
             <label style="color:rgb(250, 250, 252);">Id</label>
             <input type="text" name="stdid" required>
         </p>
         
         <p>
             <label style="color:rgb(250, 250, 252);">password</label>
             <input type="password" name="pass" minlength="5" required/>
         </p>

	<input class="btn btn-primary" type="submit" name="submit" value="Log in">
    <a href="student_create.php" class="btn btn-primary">create</a>
    <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div style=" color: red" class="message">'.$message.'</div>';
         }
      }
      ?>
      </div>

    </div>

  </div>
</div>



<!-- 
<div class="card">
  <h5 class="card-header">student login</h5>
  <div class="card-body">
  <p>
             <label style="color: #002147;">Id</label>
             <input type="text" name="stdid" required>
         </p>
         
         <p>
             <label style="color: #002147;">password<span>(at least 5 characters)</span></label>
             <input type="password" name="pass" minlength="5" required/>
         </p>

	<input class="btn btn-primary" type="submit" value="Submit">
    <a href="student_create.php" class="btn btn-primary">create</a>
  </div>
</div>  -->

</body>
</html>