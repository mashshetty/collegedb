<?php 





 $db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "connected<br>";
}


  $fname = "";
  $lname = "";
  $address = "";
  $gender = "";
  $dno = "";
  $usn = "";
  $campusid = "";
  $mob = "";
  $dob = "";
  $bloodgrp = "";
  $section = "";


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dno = $_POST['dno'];
    $usn = $_POST['usn'];
    $campusid = $_POST['campusid'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];
    $bloodgrp = $_POST['bloodgrp'];
    $section = $_POST['section'];

   

     
 
    
           $query = "INSERT INTO student (fname,lname,address,gender,dno,usn,campusid,mob,dob,bloodgrp,section) 
                VALUES ('$fname','$lname','$address','$gender','$dno','$usn','$campusid','$mob','$dob','$bloodgrp','$section')";
           $results = mysqli_query($db, $query);

           if($results){
           echo ' <br>insrted';
         }

         else{
          echo "not inserted";
         }
   
    
  
  mysqli_close($db);
?>

