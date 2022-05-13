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



  $subcode = $_POST['subcode'];

   $sqll = "SELECT * FROM subjects WHERE subcode='$subcode'";
   $q = mysqli_query($conn,$sqll);

   if(mysqli_num_rows($q)>0){

  $sql = "DELETE FROM subjects WHERE subcode='$subcode'";

  $qry = mysqli_query($conn,  $sql);
if($sql) {
?>
<script type="text/javascript">alert("one record deleted!")</script>
<?php

 
}

else{
  echo "<br>invalid subject code";
  }

}

else{
      ?>
        <script type="text/javascript">alert("invalid subject code!");</script>
      <?php
}
}



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>delete subject</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<body>
  <center>


    <a href="subject.php" class="btn btn-outline-secondary"> Go Back</a>


    <div class="container">
  
      <div class="card">
          <div class="card-image">	
              <h2 class="card-heading">
                 Delete Subject
              </h2>
          </div>
  
  
    <form method="post" class="crad-form" action="">
      <div class="input">
                  
          <input type="text" class="input-field" name="subcode" placeholder="" required="">
      
          <label class="input-label">Enter Subject Code</label>
      </div>
  
      <!-- submit -->
      <div class="action">
          <input type="submit" class="action-button" name="submit" value="SUBMIT">
      </div>
  

  </form>
</center>
</body>
</html>