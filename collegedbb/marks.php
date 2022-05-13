


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
	 $usn = $_POST['uusn'];
    $sub = $_POST['sub'];
     $year = $_POST['year'];
      $dno = $_POST['dno'];
      $marks = $_POST['marks'];
      $m = $_POST['m'];
      



    $s = "SELECT * FROM marks WHERE  uusn='$usn' AND scode='$sub'";  

    $ss = mysqli_query($db,$s);

    if(mysqli_num_rows($ss)>0){


      $k = "UPDATE marks SET uusn='$usn',scode='$sub',year='$year',dno='$dno',$marks='$m' WHERE uusn='$usn' AND scode='$sub'";

      $kk = mysqli_query($db,$k);

      if($kk){
        ?>

        <script type="text/javascript">alert("marks updated!!");</script>

        <?php
      }





}

else{


       $query = "INSERT INTO marks (uusn,scode,year,dno,$marks) 
                VALUES ('$usn', '$sub', '$year', '$dno','$m')";
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
  <title>Marks</title>
	</head>
	<body>
    <center>
    <a href="seemarks.php" class="btn btn-outline-secondary">Marks list </a> 
    <a href="home.php" class="btn btn-outline-secondary">Go Back </a> 

    
    <div class="container">
      <!-- code here -->
    <div class="card">
      <div class="card-image">	
        <h2 class="card-heading">
          Marks
        </h2>
            </div>
            
            <form method="post" class="card-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="input">
                
                <input type="text" class="input-field" name="uusn" placeholder="" required="">
                
                <label class="input-label">Enter USN</label>
              </div>
              
              <div class="input">
              
                <label for="year" class="input-label">Enter Semester</label>
              </div>
              
              <select class="input-field" name="year" id="marks">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              
              
              </select><br>


              <div class="input">
                
                
                
                <label for="sub" class="input-label">Choose Subject</label>
              </div>

    <select  class="input-field" name="sub" id="sub">

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
              
  <label for="dno" class="input-label">Department Number</label>
</div>

<select class="input-field" name="dno" id="marks">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>


</select><br>

<div class="input">
              
  <label for="marks" class="input-label">Choose Exam</label>
</div>

<select class="input-field" name="marks" id="marks">
  <option value="IA1">IA1</option>
  <option value="IA2">IA2</option>
  <option value="IA3">IA3</option>
  <option value="sem">sem</option>


</select><br>

<div class="input">
                
  <input type="text" class="input-field" name="m" placeholder="" required="">
  
  <label class="input-label">Enter Marks Scored</label>
</div>




<div class="action">
  <input type="submit" class="action-button" name="submit" value="submit">
</div>


</form>
  </center>
</body>
</html>