<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "my_miniproject(1)";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "Thank you...Will Contact you";
 $fname=$_GET['firstname'];
 $lname=$_GET['lastname'];
 $school=$_GET['schoolname'];
 $phno=$_GET['contactno'];
 $email=$_GET['email'];
 $place=$_GET['place'];

 $res = mysqli_query($conn,"insert into register_details
  values('$fname','$lname','$school','$phno','$email','$place')");
  $res1=mysqli_query($conn,"select * from register_details");
  $conn -> close();
    
  ?>