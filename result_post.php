<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Result post</title>
</head>
<body>
 
<section class="navi"> 
    

       <div class="brnd">
       <a class="active" href="admin_page.php"><b><em>Admin</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- <a href="student_login.php"><b><em>Student</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="#contact"><b><em>Teacher</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
  <!-- <a href="#about"><em><b>About</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>
       
</section> 
<br><br>


  <div class="col-sm-6">
    <div class="card">
    <div class="card-body" style=" background-color: #002147;">
    <h5 style="color:rgb(250, 250, 252);" class="card-title">Result Post</h5>
  <form action="" method="POST">
         <p>
           <label>Username</label>
           <input type="text" name="stdname" required/>
         </p>
        
         <p>
             <label>Id</label>
             <input type="text" name="stid" required>
         </p>
         <p>
         <label>Bangla</label>
         <input type="text" name="bangla" required>
        </p>
         <p>
             <label>English</label>
             <input type="text" name="english" required/>
         </p>
         <p>
             <label>Math</label>
             <input type="text" name="math" required/>
         </p>
         <p>
             <label>Science</label>
             <input type="text" name="science" required/>
         </p>
         <p>
             <label>Religion</label>
             <input type="text" name="religion" required/>
         </p>
         
         <p >
             <label>Class</label>
             <select class="com" name="class"> 
              <option value="10">10 </option>
             
           </select>

         </p>
         

	<input class="btn btn-primary" type="submit" value="SUBMIT">
    
    </form>
  </div>
    </div>
  </div>
</div>



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

    ?>


</body>
</html>