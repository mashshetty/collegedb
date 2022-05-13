<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fees</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<?php

$db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}








if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $usn = $_POST['usn'];
    $fee = $_POST['fee'];
     $paid = $_POST['paid'];
     $pending=$_POST['fee']-$_POST['paid'];
       $due = $_POST['due'];


     



       $query = "INSERT INTO fees (usssn,fee,paid,pending,due) 
                VALUES ('$usn', '$fee', '$paid', '$pending','$due')";
           $results = mysqli_query($db, $query);

           if($results){
           ?>
            <script type="text/javascript">alert("one record added successfully!");</script>

          <?php
            
       }

       else{
               ?>
            <script type="text/javascript">alert("some error occured!");</script>

          <?php
            }
   
    
  
  mysqli_close($db);
}





	?>


<center>


  <a href="seefee.php" class="btn btn-outline-secondary">show records</a> 
  <a href="updatefee.php" class="btn btn-outline-secondary">update fees</a> 
    <a href="home.php" class="btn btn-outline-secondary">Go back</a> 


  <div class="container">
    <!-- code here -->
    <div class="card">
      <div class="card-image">	
        <h2 class="card-heading">
          Fees Records
        </h2>
      </div>



    
<form method="post" class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<div class="input">
                
          <input type="text" class="input-field" name="usn" placeholder="" required="">
          
          <label class="input-label">Enter USN</label>
        </div>

        <div class="input">
                
          <input type="text" class="input-field" name="fee" placeholder="" required="">
          
          <label class="input-label">Enter Total Fees</label>
        </div>

        <div class="input">
                
                <input type="text" class="input-field" name="paid" placeholder="" required="">
                
                <label class="input-label">Enter Amount Paid</label>
              </div>

              <div class="input">
                
                <input type="date" class="input-field" name="due" placeholder="" required="">
                
                <label for="due" class="input-label">Due Date</label>
              </div>




              <div class="action">
  <input type="submit" class="action-button" name="submit" value="submit">
</div>


</form>
</center>
</body>
</html>