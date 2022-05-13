
	<?php

$db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "connected";
}





	$sub = "";
  $staff = "";
  
  
	 $sub = $_POST['sub'];
    $staff = $_POST['staff'];
 

       $query = "INSERT INTO assign (sub_code,staff) 
                VALUES ('$sub', '$staff')";
           $results = mysqli_query($db, $query);

           if($results){
           echo ' <h1> assigned successfully!</h1>';
       }
       else{
         echo ' <h1>some error occured..subject not assigned!</h1>';

       }
   
    
  
  mysqli_close($db);





	?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="assign.php">Go back</a>
  
  </body>
  </html>


