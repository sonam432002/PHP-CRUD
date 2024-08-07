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
    <h1> Student Data</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Rollno</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Fees</th>
    </tr>
  </thead>
  <tbody>

   <?php 
    $con= new mysqli("localhost", "root", "", "cybrom");
    $sql="select *  from student";
    $result=$con->query($sql);
     while( $row=$result->fetch_assoc())
     {
        echo "<tr>";
         echo "<td>".$row["rollno"]."</td>";
         echo "<td>".$row["name"]."</td>";
         echo "<td>".$row["city"]."</td>";
         echo "<td>".$row["fees"]."</td>";
        echo "</tr>";
     } 
     $con->close();
?>
  </tbody>
    </table>









 </div>
<?php 
   include "include/footer.php";
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>