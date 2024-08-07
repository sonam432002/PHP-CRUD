<?php 
  $rollno=$_GET["rno"];
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
    <h1> Update Recors</h1>

    <?php 
      $con= new mysqli("localhost", "root", "", "cybrom");
      $sql="select *  from student where rollno=$rollno";
      $result=$con->query($sql);
      while($row=$result->fetch_assoc())
      {
        echo "<form method='post' action='updatesave.php'>";
        echo "<table>";
        echo "<tr>";
         echo "<td> Rollno </td>";
         echo "<td>  <input type='text' value='".$row["rollno"]."'  name='rno'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> name </td>";
        echo "<td><input type='text' value='".$row["name"]."'  name='nm'></td>";
       echo "</tr>";
       echo "<tr>";
       echo "<td> City </td>";
       echo "<td><input type='text' value='".$row["city"]."'  name='ct'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Fees </td>";
      echo "<td><input type='text' value='".$row["fees"]."'  name='fs'></td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> </td>";
     echo "<td><input type='submit' value='update'></td>";
    echo "</tr>";
     echo "</table>";
    echo "</form>";
      }
   ?>
 </div>
<?php 
   include "include/footer.php";
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>