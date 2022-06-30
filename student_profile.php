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
	<title>student profile</title>
</head>
<body>
	

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

   
<?php

$connection=mysqli_connect('localhost','root','','school_management');
session_start();
$s_id = $_SESSION['s_id'];

if(!isset($s_id)){
//    header('location:student_login.php');
};

if(isset($_GET['logout'])){
   unset($s_id);
   session_destroy();
   header('location:student_login.php');
}

?>
<?php
         $connection=mysqli_connect('localhost','root','','school_management');
         $select = mysqli_query($connection, "SELECT * FROM student_info WHERE Student_Id = '$s_id'");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         
      ?>
     

      <div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-body" style=" background-color: #002147;">
        <h5 style="color:rgb(250, 250, 252);" class="card-title"><b>PROFILE</b></h5>
        
        <p>
             <label style="color:rgb(250, 250, 252);">Id :</label>
             <?php echo $fetch['Student_Id']; ?>
         </p>
        
        <p>
             <label style="color:rgb(250, 250, 252);">Name :</label>
             <?php echo $fetch['Username']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Phone :</label>
             <?php echo $fetch['Phone']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Email :</label>
             <?php echo $fetch['Email']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Gender :</label>
             <?php echo $fetch['Gender']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Distric :</label>
             <?php echo $fetch['District']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Class :</label>
             <?php echo $fetch['Class']; ?>
         </p>
         

	
      </div>
    </div>
  </div>
  
  <?php
         $connection=mysqli_connect('localhost','root','','school_management');
         $select =mysqli_query($connection, "SELECT * FROM student_result WHERE Student_Id = '$s_id'");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         
      ?>
  
  
  <div  class="col-sm-6">
    
    <div class="card">
      
      <div class="card-body" style=" background-color: #002147;">
        <h5 style="color:rgb(250, 250, 252);" class="card-title"><b>RESULT</b></h5>
        <p>
             <label style="color:rgb(250, 250, 252);">Bangla :</label>
             <?php echo $fetch['Bangla']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">English :</label>
             <?php echo $fetch['English']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Math :</label>
             <?php echo $fetch['Math']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Science :</label>
             <?php echo $fetch['Science']; ?>
         </p>
         <p>
             <label style="color:rgb(250, 250, 252);">Religion :</label>
             <?php echo $fetch['Religion']; ?>
         </p>
	
      </div>

    </div>

  </div>
</div>









</body>
</html>