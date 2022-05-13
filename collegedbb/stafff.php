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





	$fname = "";
  $lname = "";
   $gender = "";
  $dno = "";
  $staff_id = "";
  $address = "";
  $phone = "";
  $dob = "";
  $filename = "";
   $filetmpname = "";
   $folder = "";
  


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
     $dno = $_POST['dno'];
      $staffid = $_POST['staffid'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $dob = $_POST['dob'];


        $filename = $_FILES['pic']['name'];
$filetmpname = $_FILES['pic']['tmp_name'];
$folder = 'imagesuploadedf/';


move_uploaded_file($filetmpname, $folder.$filename);

      





        $query = "INSERT INTO staff (fname,lname,gender,dno,staff_id,address,phone,dob,pic) 
                VALUES ('$fname', '$lname','$gender', '$dno', '$staffid','$address','$phone','$dob','$filename')";
           $results = mysqli_query($db, $query);

           if($results){
          echo ' <h1>staff added successfully!</h1>'; 
       }
   
    
  }
  mysqli_close($db); 





	?>





          <a href="seestaff.php" class="btn btn-outline-secondary" href="#" role="button">See Staff</a>
          <a href="delstaff.php" class="btn btn-outline-secondary" href="#" role="button">Delete Staff</a>
          <a href="editstaff.php" class="btn btn-outline-secondary" href="#" role="button">Edit Staff</a>
          <a href="home.php" class="btn btn-outline-secondary" href="#" role="button">Go Back</a>
          
        

  <div class="container">

    <div class="card">
        <div class="card-image">	
            <h2 class="card-heading">
                Add Staff
            </h2>
        </div>

        
<form method="post" class="crad-form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="input">
            
<input type="text" class="input-field" name="fname" placeholder="" required>

<label class="input-label">Enter First Name</label>
</div>


<div class="input">
            
<input type="text" class="input-field" name="lname" placeholder="" required>

<label class="input-label">Enter Last Name</label>
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
            
<input type="text" class="input-field" name="staffid" placeholder="" required>

<label class="input-label">Enter Staff ID</label>
</div>



<div class="input">
            
<input type="number" class="input-field" name="mob" placeholder="" required>

<label class="input-label">Enter Mobile Number</label>
</div>


<div class="input">
            
<input type="date" class="input-field" name="dob" placeholder="" required>

<label class="input-label">Enter Date Of Birth</label>
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
    <input type="file" name="Pic">
</div>
</div>

<div class="action">
<input type="submit" class="action-button" name="submit" value="SUBMIT">
</div>

</form>

</center>
</body>
</html>