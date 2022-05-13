


	<?php

$db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}





$percentage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $usn = $_POST['usnn'];
    $sub = $_POST['sub'];
     $date = $_POST['date'];
      $total = $_POST['total'];
      $attended = $_POST['attended'];

$percentage = ($attended * 100)/$total;

    $s = "SELECT * FROM attendance WHERE  usnn='$usn' AND sub='$sub'";  

    $ss = mysqli_query($db,$s);

    if(mysqli_num_rows($ss)>0){


      $k = "UPDATE attendance SET usnn='$usn',sub='$sub',date='$date',total='$total',attended='$attended',percentage='$percentage' WHERE usnn='$usn' AND sub='$sub'";

      $kk = mysqli_query($db,$k);

      if($kk){
        ?>

        <script type="text/javascript">alert("attendance updated!!");</script>

        <?php
      }





}

else{


       $query = "INSERT INTO attendance (usnn,sub,date,total,attended,percentage) 
                VALUES ('$usn', '$sub', '$date', '$total','$attended','$percentage')";
           $results = mysqli_query($db, $query);

           if($results){
           ?>
            <script type="text/javascript">alert("added successfully!");</script>

          <?php
       }
     }
   
    
  
  mysqli_close($db);
}





	?>





<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
<center>

  <a href="seeat.php" class="btn btn-outline-secondary">Attendance list </a>
  <a href="home.php" class="btn btn-outline-secondary">Go Back</a> 
  <div class="container">
    <!-- code here -->
    <div class="card">
      <div class="card-image">	
        <h2 class="card-heading">
          Attendance
        </h2>
      </div>
      
      <form method="post" class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <div class="input">
                
          <input type="text" class="input-field" name="usnn" placeholder="" required="">
          
          <label class="input-label">Enter USN</label>
        </div>

        <div class="input">
          
          <input type="text" class="input-field" name="total" placeholder="" required="">
          
          <label class="input-label">Out Of</label>
        </div>
        
        
        <div class="input">
          
          <input type="text" class="input-field" name="attended" placeholder="" required="">
          
          <label class="input-label">Attended</label>
        </div>
        
        
        
        <div class="input">
          
          
          <label for="sub" class="input-label">Choose Subject</label>
        </div>
  
        
        <select class="input-field" name="sub" id="sub">
          
          <?php
          
          $query = "SELECT subcode FROM subjects";
          $result = mysqli_query($db, $query);
          
          if(!$result){
            echo $result . "<br/>" . mysqli_error($db);
          }
          
          
          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
              ?>
              
              
              <option name="sub" value="<?php echo $row["subcode"]; ?>"> <?php echo $row["subcode"]; ?></option>
              
              <br>
              
              <?php
            }
          } else {
            ?>
            
    <?php
    }
    ?>


  </select><br>

  <div class="input">
          
    <input type="date" class="input-field" name="date" placeholder="" required="">
    
    <label class="input-label">Last Updated Date</label>
  </div>
  
  


<div class="action">
  <input type="submit" class="action-button" name="submit" value="submit">
</div>




</form>
</center>
</body>
</html>