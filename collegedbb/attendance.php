


	<?php

$db = mysqli_connect('localhost','root','','collegedb');




  // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}





	$dname = "";
  $dno = "";
  $hod = "";
  $location = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $usn = $_POST['usnn'];
    $sub = $_POST['sub'];
     $date = $_POST['date'];
      $total = $_POST['total'];
      $attended = $_POST['attended'];

       $query = "INSERT INTO attendance (usnn,sub,date,total,attended) 
                VALUES ('$usn', '$sub', '$date', '$total','$attended')";
           $results = mysqli_query($db, $query);

           if($results){
           ?>
            <script type="text/javascript">alert("added successfully!");</script>

          <?php
       }
   
    
  
  mysqli_close($db);
}





	?>





<!DOCTYPE html>
<html>
<head>
	</head>
	<body>


	<h1>attendance</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">










	<label for="sub">choose subject</label>
    <select name="sub" id="sub">

    <?php
    
    $query = "SELECT subcode FROM subjects";
    $result = mysqli_query($db, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($db);
    }

    
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
 

  <option name="sub" value="mash"> <?php echo $row["subcode"]; ?></option>
  
    <br>

    <?php
      }
    } else {
    ?>
      
    <?php
    }
    ?>


</select><br>









<input type="text" name="usnn" placeholder="enter usn:" required><br>


<input type="date" name="date" placeholder="enter date" required><br>


<input type="text" name="total" placeholder="out of" required><br>

<input type="text" name="attended" placeholder="attended" required><br>


<input type="submit" name="submit" value="submit">
</form>
</body>
</html>