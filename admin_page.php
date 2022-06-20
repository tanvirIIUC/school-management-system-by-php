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
	<title>Admin page</title>
</head>
<body>
	

<section class="navi">   
       <div class="brnd">
       <a class="active" href="home.php"><b><em>Home</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="studentlist.php"><b><em>Studentlist</b></em></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="teacherlist.php"><b><em>Teacherlist</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="result_show.php"><em><b>Result_show</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="result_post.php"><em><b>Result_post</em></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       </div>
       <div class="scl"> <p> <b><em>SCHOOL</em></b></p>   </div>     
</section> 
<br><br>


  <div class="col-sm-6">
    <div class="card">
    <div class="card-body" style=" background-color: #002147;">
    <h5 style="color:rgb(250, 250, 252);" class="card-title">Notice Post</h5>
  <form action="" method="POST">
         <!-- <p> 
           <label>Username</label>
           <input type="text" name="stdname" required/>
         </p>-->
        
         <div class="form-floating" >
  <textarea name="notice" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px;"></textarea>
  
</div>

         
<br>
	<input class="btn btn-primary" type="submit" value="SUBMIT">
    
    </form>
  </div>
    </div>
  </div>
</div>



    <?php
    
        $notice=$_POST['notice'];
 
    $connection=mysqli_connect("localhost","root","","school_management");
    mysqli_query($connection,"INSERT INTO notice(notice) 
    VALUES('$notice')");

    ?>

<?php

$connection=mysqli_connect('localhost','root','','school_management');

$query=mysqli_query($connection,"SELECT * FROM notice");
 
 

?>

  <h1 style=" text-align:center"><em>Notice View</em></h1>
 <table class="table table-dark table-hover" border="2" cellspacing="7"> 
 <tr> 
    <td>ID</td>
    <td>Notice</td>
    <td>DATE_time</td>
    <td>Delete</td>
    <td>Edit</td>
  
</tr> 
 
<?php

while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
    ?>
    <tr>
   
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['notice']?></td>
    <td><?php echo $row['date_time']?></td>

    <td>
        <a href="notice_delete.php?id=<?php echo $id?>">Delete</a>
    </td>
    <td>
		<a href="n_edit.php?id=<?php echo $id?>">Edit</a>
			</td>
    
</tr>
    <?php
}
?>
</table>

</body>
</html>