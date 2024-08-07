<?php 
if (isset($_POST["submit"]))
{
  $rollno=$_POST["rno"];
  $name=$_POST["nm"];
  $city=$_POST["ct"];
  $fees=$_POST["fs"];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
  <body>
   
  <div class="container">
  
   <?php 
    require "include/topmenu.php";
   ?>
  
 
 <div id="mydata">

  <?php
 if (isset($_POST["submit"]))
 {

  $con=new mysqli("localhost", "root", "", "cybrom");

  $sql="insert into student(rollno,	name,	city,	fees)  
  values('$rollno', '$name', '$city', '$fees') ";
  $con->query($sql);
  $con->close();

  echo "<script>";
  echo "alert('Record Save!!!')";
  echo "</script>";
 }

   
?>














    <h1> Insert Student Records</h1>

    <form method="post" action="insert.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Rollno</label>
    <input type="text" class="form-control" name="rno" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Name</label>
    <input type="text" class="form-control" name="nm" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter City</label>
    <input type="text" class="form-control" name="ct" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Fees</label>
    <input type="text" class="form-control" name="fs" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


 </div>


<?php 
   include "include/footer.php";

?>



</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>