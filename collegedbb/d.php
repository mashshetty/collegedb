<?php 





 $db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}


  $dname = "";
  $dno = "";
  $hod = "";
  $location = "";
 






    $dname = $_POST['dname'];
    $dno = $_POST['dno'];
     $hod = $_POST['hod'];
      $location = $_POST['location'];

    


   

     
 
    
           $query = "INSERT INTO department (dname,dno,hod,location) 
                VALUES ('$dname', '$dno', '$hod', '$location')";
           $results = mysqli_query($db, $query);
           echo ' <br><br><br><h1>department added!</h1>';
   
    
  
  mysqli_close($db);
?>

