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
	<title>Result edit</title>
</head>
<body>
	

<section class="navi">   
       <div class="brnd">
       <a class="active" href="home.php"><b><em>Home</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="admin_page.php"><b><em>Admin</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- <a href=""><b><em>Teacher</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="home.php"><em><b>About</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>     
</section> 
<br><br>


<?php
session_start();
$connection=mysqli_connect('localhost','root','','school_management');
$id=$_GET['id'];


	$query=mysqli_query($connection,"select * from student_result where id='$id'");
	$row=mysqli_fetch_array($query);
?>

	
<div class="col-sm-6">
    <div class="card">
    <div class="card-body" style=" background-color: #002147;">
    <h5 style="color:rgb(250, 250, 252);" class="card-title">Result edit</h5>

    <form action="r_update.php?id=<?php echo $id;?>" method="POST">
         <p>
           <label>Username</label>
           <input type="text" value="<?php echo $row['Username']; ?>" name="stdname" required/>
         </p>
        
         <p>
             <label>Id</label>
             <input type="text"value="<?php echo $row['Student_Id']; ?>" name="stid" required>
         </p>
         <p>
         <label>Bangla</label>
         <input type="text"value="<?php echo $row['Bangla']; ?>" name="bangla" required>
        </p>
         <p>
             <label>English</label>
             <input type="text" value="<?php echo $row['English']; ?>"name="english" required/>
         </p>
         <p>
             <label>Math</label>
             <input type="text"value="<?php echo $row['Math']; ?>" name="math" required/>
         </p>
         <p>
             <label>Science</label>
             <input type="text"value="<?php echo $row['Science']; ?>" name="science" required/>
         </p>
         <p>
             <label>Religion</label>
             <input type="text"value="<?php echo $row['Religion']; ?>" name="religion" required/>
         </p>
         

	<input class="btn btn-primary" type="submit" value="SUBMIT">
    
    </form>
    </div>
    </div>
  </div>

	
</body>
</html>