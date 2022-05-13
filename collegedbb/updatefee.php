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


$fees="";
 $usn = $_POST['usn'];
  $choose = $_POST['choose'];
   $up = $_POST['up'];



$n = "SELECT fee FROM fees WHERE usssn='$usn'";

$nn = mysqli_query($conn,$n);
if(!$nn){
  echo "error!";
}



  

    if(mysqli_num_rows($nn)>0){
      while($row = mysqli_fetch_array($nn)){

$fees = $row["fee"];


      }
    }


 


$pending=$fees-$up;






 
 








    $sql_u = "SELECT * FROM fees WHERE usssn='$usn'";

    $res_u = mysqli_query($conn, $sql_u);


    if (mysqli_num_rows($res_u) > 0) {
      
       



  $sql = "UPDATE fees
SET $choose='$up',pending='$pending'
WHERE usssn='$usn'";

  $qry = mysqli_query($conn,$sql);
if($sql) {
?>
<script type="text/javascript">alert("update successfull!")</script>
<?php

 
}

else{
  echo "<br>invalid campus id";
  }
}

else{
      ?>
        <script type="text/javascript">alert("invalid usn!");</script>

      <?php
}

}





?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Fees update</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <center>

<a href="fee.php" class="btn btn-outline-secondary">Go back</a>

  <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                  Update Fine
                </h2>
            </div>


  <form method="post"  class="crad-form" action="">

    <div class="input">
            
            <input type="text" class="input-field" name="usn" placeholder="" required=""><br>
            <label class="input-label" for="Choose">Enter student usn</label>
        </div>


    <div class="input">
            
            <input type="text" class="input-field" name="up" placeholder="" required=""><br>
            <label class="input-label" for="Choose">Enter The Data To Update</label>
        </div>
  <div class="input">
    <label class="input-label" for="Choose">Change</label>
</div>

    <select class="input-field" name="choose" id="choose">
			<option value="unpaid">Unpaid</option>
			<option value="paid">Paid</option>
			
		    </select>


   
    
    <div class="action">
       <input type="submit" class="action-button" name="submit" value="submit">
     </div>


  </form>
</center>
</body>
</html>