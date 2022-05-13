<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>student</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <center>

	<?php

$db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}





	$subname = "";
  $subcode = "";
  $tot_hours = "";
  $year = "";
  $theory = "";
  $practical = "";
  $dnum = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $subname = $_POST['subname'];
    $subcode = $_POST['subcode'];
     $tot_hours = $_POST['tot_hours'];
      $year = $_POST['year'];
      $theory = $_POST['theory'];
      $practical = $_POST['practical'];
      $dnum = $_POST['dnum'];

       $query = "INSERT INTO subjects (subname,subcode,tot_hours,year,theory,practical,dnum) 
                VALUES ('$subname', '$subcode', '$tot_hours', '$year','$theory','$practical','$dnum')";
           $results = mysqli_query($db, $query);

           if($results){
          ?>
            <script type="text/javascript">alert("Department added successfully!");</script>

          <?php
       }
   
    
  
  mysqli_close($db);
}





	?>

<a href="delsub.php" class="btn btn-outline-secondary" href="#" role="button">Delete Subject</a>
          <a href="seesub.php" class="btn btn-outline-secondary" href="#" role="button">See Subject</a>
          <a href="home.php" class="btn btn-outline-secondary" href="#" role="button">Go Back</a>
        

  <div class="container">

    <div class="card">
        <div class="card-image">	
            <h2 class="card-heading">
                Add Subject
            </h2>
        </div>

        
<form method="post" class="crad-form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="input">
            
<input type="text" class="input-field" name="subname" placeholder="" required>

<label class="input-label">Enter Subject Name</label>
</div>


<div class="input">
            
<input type="text" class="input-field" name="subcode" placeholder="" required>

<label class="input-label">Enter Subject Code</label>
</div>



<div class="input">
            
<input type="text" class="input-field" name="tot_hours" placeholder="" required>

<label class="input-label">Enter Total Number Of Hours</label>
</div>



<div class="input">
            
<label for="year" class="input-label">Choose Semester</label>
</div>
                
    
<select class="input-field" name="year" id="chooose"><br>
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
            
<input type="text" class="input-field" name="theory" placeholder="" required>

<label class="input-label">Enter Theory Marks</label>
</div>



<div class="input">
            
<input type="number" class="input-field" name="practical" placeholder="" required>

<label class="input-label">Enter Practical Marks</label>
</div>


<div class="input">
            
<input type="text" class="input-field" name="dnum" placeholder="" required>

<label class="input-label">Enter Department Number</label>
</div>

<div class="action">
    <input type="submit" class="action-button" name="submit" value="SUBMIT">
    </div>
    

</form>

</center>
</body>
</html>