<?php 
 $rollno=$_POST["rno"];
 $name=$_POST["nm"];
 $city=$_POST["ct"];
 $fees=$_POST["fs"];
 $con= new mysqli("localhost", "root", "", "cybrom");
 $sql="update student set name='$name', city='$city', fees='$fees' where rollno='$rollno'";
 $con->query($sql);
 $con->close();
 header("location: update.php?update=yes");
?>
