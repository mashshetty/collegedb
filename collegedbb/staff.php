<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>student</title>
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


        $filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
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




	<h1>Add Staff</h1>
  <h3><a href="delstaff.php">delete staff</a> </h3>
   <h3><a href="editstaff.php">edit staff</a> </h3>
    <h3><a href="seestaff.php">see staffs</a> </h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<input type="text" name="fname" placeholder="enter first name :" required><br>

<input type="text" name="lname" placeholder="enter last name" required><br>

<label>gender</label><br>
<input type="radio" name="gender" value="male">
<label for="male">male</label><br>
<input type="radio" name="gender" value="female">
<label for="female">female</label><br>
<input type="radio" name="gender" value="others">
<label for="others">others</label><br>


<input type="text" name="dno" placeholder="enter department number" required><br>

<input type="text" name="staffid" placeholder="enter staff id" required><br>

<input type="text" name="address" placeholder="enter address" required><br>

<input type="text" name="phone" placeholder="enter phone number" required><br>

<input type="text" name="dob" placeholder="enter date of birth" required><br>


 <label for="image">profile : </label><br>
 <input type="file" name="uploadfile" />
  <br><br>





<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>