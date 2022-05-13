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

<!Doctype html>
<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body><center>
      
    <a href="student.php" class="btn btn-outline-secondary"> Go Back</a>
    <a href="fstaff.php" class="btn btn-outline-secondary">Free Lecture</a>
    <a href="assigned.php" class="btn btn-outline-secondary">Assigned Subjects</a>
  
  <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Assign Subject
                </h2>
            </div>

  <form method="post" class="card-form" action="a.php">

    <div class="input">
                
       
    
        <label class="input-label">Choose Course</label>
    </div><br>
    
<select class="input-field" name="sub" id="sub"><br>

    <?php
    
    $query = "SELECT subcode FROM subjects";
    $result = mysqli_query($conn, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($conn);
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



  <option value="fname">18CS30</option>
  <option value="lname">18CS62</option>
  <option value="adderss">18EC32</option>
  <option value="dno">18EE31</option>
  
</select><br>

<div class="input">
                
    <input type="text" class="input-field" name="staff" placeholder="" required="">

    <label class="input-label">Enter Staff Id</label>
</div>


<div class="action">
  <input type="submit" class="action-button" name="submit" value="submit">
</div>
</form>
  </center>
  </body>
</html>