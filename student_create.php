<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>student_</title>
</head>
<body>
    <!-- <div class="div"> 
       <h1>STUDENT CREATE </h1>
     <div class="div-input">
        <form action="" method="POST">
       
            <p>
           <label>Username</label>
           <input type="text" name="stdname" required/>
         </p>
        
         <p>
             <label>Id</label>
             <input type="text" name="stdid" required>
         </p>
         <label>phone</label>
         <input type="text" name="phone" required>
         
         <p>
             <label>Email</label>
             <input type="email" name="email" required/>
         </p>
         <p>
             <label>Gender</label>
             <input class="rad" type="radio" name="gender" value="male"> male
             <input class="rad" type="radio" name="gender" value="female"> female
         </p>
         <p >
             <label>District</label>
             <select class="com" name="distric"> 
              <option value="dhaka">Dhaka </option>
              <option value="chittagong">Chittagong</option>
              <option value="Barisal">Barisal </option>
              <option value="Khulna">Khulna </option>
              <option value="Mymensingh">Mymensingh </option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur </option>
              <option value="Sylhet">Sylhet </option>
           </select>

         </p>
         <p>
             <label>password<span>(at least 5 characters)</span></label>
             <input type="password" name="pass" minlength="5" required/>
         </p>

         <p>
             <label>class</label>
             <input type="text" name="stdcls" required/>
         </p>
         <p>
             
             <input class="submit" type="submit" value="SUBMIT" />
             <p> <a href="student_login.php">Click</a><br><br</p>
         </p>
        </form>
        

     </div>
    </div>
-->
<div class="card" style=test>
  <h5 class="card-header">STUDENT CREATE</h5>
  <div class="card-body">
  <form action="" method="POST">
         <p>
           <label>Username</label>
           <input type="text" name="stdname" required/>
         </p>
        
         <p>
             <label>Id</label>
             <input type="text" name="stdid" required>
         </p>
         <p>
         <label>phone</label>
         <input type="text" name="phone" required>
        </p>
         <p>
             <label>Email</label>
             <input type="email" name="email" required/>
         </p>
         <p>
             <label>Gender</label>
             <input class="rad" type="radio" name="gender" value="male"> male
             <input class="rad" type="radio" name="gender" value="female"> female
         </p>
         <p >
             <label>District</label>
             <select class="com" name="distric"> 
              <option value="dhaka">Dhaka </option>
              <option value="chittagong">Chittagong</option>
              <option value="Barisal">Barisal </option>
              <option value="Khulna">Khulna </option>
              <option value="Mymensingh">Mymensingh </option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur </option>
              <option value="Sylhet">Sylhet </option>
           </select>

         </p>
         <p>
             <label>password<span>(at least 5 characters)</span></label>
             <input type="password" name="pass" minlength="5" required/>
         </p>

         <p>
             <label>class</label>
             <input type="text" name="stdcls" required/>
         </p>

	<input class="btn btn-primary" type="submit" value="SUBMIT">
    <a href="student_login.php" class="btn btn-primary">login</a>
    </form>
  </div>
</div>
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

    ?>


</body>
</html>