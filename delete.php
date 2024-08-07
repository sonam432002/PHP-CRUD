
<?php 
 $rollno=$_GET["rno"];

 $con= new mysqli("localhost", "root", "", "cybrom");

 $qry="delete from student where rollno=$rollno";

 $con->query($qry);

 $con->close();

 header("location: update.php");

?>