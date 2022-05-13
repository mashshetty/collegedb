<?php
  $conn = mysqli_connect('localhost','root','','collegedb');


 // Check connection
 // Check connection
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}
?>



<?php

if(isset($_POST['submit'])) {

$staff_id = "";
$up = "";
$choose = "";

  $staff_id = $_POST['staff_id'];
  $up = $_POST['up'];
  $choose = $_POST['choose'];

    $sql_u = "SELECT * FROM staff WHERE staff_id='$staff_id'";

    $res_u = mysqli_query($conn, $sql_u);


    if (mysqli_num_rows($res_u) > 0) {
      
       

  $sql = "UPDATE staff
SET $choose='$up'
WHERE staff_id='$staff_id'";

  $qry = mysqli_query($conn,$sql);
if($sql) {
?>
<script type="text/javascript">alert("update successfull!")</script>
<?php

 
}

else{
  echo "<br>invalid staff id";
  }
}

else{
      ?>
        <script type="text/javascript">alert("invalid staff id!");</script>

      <?php
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>edit staff</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <center>


    <h3><a href="stafff.php" class="btn btn-outline-secondary"> Go Back</a></h3>

    <div class="container">
          <!-- code here -->
          <div class="card">
              <div class="card-image">	
                  <h2 class="card-heading">
                      Edit Staff Details
                  </h2>
              </div>
  
    <form method="post" class="card-form" action="">
  
      <div class="input">
                  
          <input type="text" class="input-field" name="campusid" placeholder="" required="">
      
          <label class="input-label">Enter Staff ID</label>
      </div>
  
      <div class="input">
                  
         
      
          <label class="input-label">What Data You Want To Edit</label>
      </div><br>
      
  <select class="input-field" name="choose" id="chooose"><br>
    <option value="fname">First Name</option>
    <option value="lname">Last Name</option>
    <option value="adderss">Address</option>
    <option value="dno">Department Number</option>
    <option value="staff_id">Staff ID</option>
    <option value="mob">Mobile</option>
    <option value="dob">Date Of Birth</option>
    <option value="gender">Gender</option>
  
  </select><br>
  
  <div class="input">
                  
      <input type="text" class="input-field" name="campusid" placeholder="" required="">
  
      <label class="input-label">Enter The Data To Update</label>
  </div>
  
  
  <div class="action">
    <input type="submit" class="action-button" name="submit" value="submit">
  </div>
      
  

  </form>
</center>
</body>
</html>