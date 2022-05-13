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
echo "connected<br>";
}






     
      ?>























<?php

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
   $filename = "";
   $filetmpname = "";
   $folder = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST"){


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

    $filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$folder = 'imagesuploadedf/';





move_uploaded_file($filetmpname, $folder.$filename);




    $query = "INSERT INTO student (fname,lname,address,gender,dno,usn,campusid,mob,dob,bloodgrp,section,pic) 
                VALUES ('$fname','$lname','$address','$gender','$dno','$usn','$campusid','$mob','$dob','$bloodgrp','$section','$filename')";
           $results = mysqli_query($db, $query);

           if($results){
           
            ?>
            <!-- <script type="text/javascript">alert("one record added successfully!")</script> -->

            <?php


         }

         
   
    
  
  mysqli_close($db);



  }







	?>
    <a href="seestd.php" class="btn btn-outline-secondary" href="#" role="button">See Students</a>
    <a href="dltstd.php" class="btn btn-outline-secondary" href="#" role="button">Delete Students</a>
    <a href="edit.php" class="btn btn-outline-secondary" href="#" role="button">Edit Students</a>
    <a href="dwise.php" class="btn btn-outline-secondary" role="button">See Student Department Wise</a>
    <a href="home.php" class="btn btn-outline-secondary" role="button">Go Back</a>

    <div class="container">

        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Add Student
                </h2>
            </div>

            
<form method="post" class="crad-form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="input">
                
    <input type="text" class="input-field" name="fname" placeholder="" required>

    <label class="input-label">First Name</label>
</div>


<div class="input">
                
    <input type="text" class="input-field" name="lname" placeholder="" required>

    <label class="input-label">Last Name</label>
</div>






<div class="input">
                
    <input type="text" class="input-field" name="address" placeholder="" required>

    <label class="input-label">Address</label>
</div>



<div class="input">
                
    <input type="text" class="input-field" name="dno" placeholder="" required>

    <label class="input-label">Enter Department Number</label>
</div>



<div class="input">
                
    <input type="text" class="input-field" name="usn" placeholder="" required>

    <label class="input-label">Enter USN</label>
</div>



<div class="input">
                
    <input type="text" class="input-field" name="campusid" placeholder="" required>

    <label class="input-label">Enter Campus ID</label>
</div>


<div class="input">
                
    <input type="number" class="input-field" name="mob" placeholder="" required>

    <label class="input-label">Enter Mobile Number</label>
</div>


<div class="input">
                
    <input type="date" class="input-field" name="dob" placeholder="" required>

    <label for="dob" class="input-label">Enter Date Of Birth</label>
</div>


<div class="input">
                
    <input type="text" class="input-field" name="bloodgrp" placeholder="" required>

    <label class="input-label">Enter Blood Group </label>
</div>


<div class="input">
                
   
    <label for="selection" class="input-label">Select Semester</label>
 
  <select class="input-field" name="section" id="chooose"><br>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
    </select><br>

</div>

<div class="input">
                
    <input type="radio" name="gender" value="male" required>

    <label class="input-label">Gender</label>
</div>



<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="others" >
    <label class="form-check-label" for="inlineRadio3">Others</label>
  </div>

<div>

    <div class="input">

        <label for="image" class="input-label">Profile</label>
        <input type="file" name="uploadfile" />
    </div>
</div>

<div class="action">
    <input type="submit" class="action-button" name="submit" value="SUBMIT">
</div>

</form>


</center>
</body>
</html>