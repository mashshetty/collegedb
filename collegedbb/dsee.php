<?php
  $conn = mysqli_connect('localhost','root','','collegedb');


 // Check connection
 // Check connection
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "connected<br>";
}
?>




<!Doctype html>
<html>
  <head>
  </head>
  <body>

    <h2><a href="student.php">go back</a></h2>
    <h2><a href="dltstd.php">delete student</a></h2>
    <h2><a href="edit.php">edit student</a></h2>

    <?php


    $dno = $_POST['dno'];
    $sem = $_POST['sem'];

    $c = "SELECT usn FROM student  WHERE dno='$dno' AND section='$sem' ORDER BY usn";
    $cc=mysqli_query($conn,$c);

    $roww = mysqli_num_rows($cc);
    

    ?>

    <h2>students : <?php echo $roww ?></h2>

    <?php



    $e = "SELECT subcode FROM subjects WHERE dnum='$dno' AND year='$sem' ORDER BY subcode";
$ee = mysqli_query($conn,$e);

$rww = mysqli_num_rows($ee);
    ?>
<h2>Subjects : <?php echo $rww ?></h2>
<?php




$d = "SELECT staff_id FROM staff WHERE dno='$dno' ORDER BY staff_id";
$dd = mysqli_query($conn,$d);

$rw = mysqli_num_rows($dd);
    ?>
<h2>Staffs : <?php echo $rw ?></h2>
<?php



    
    $query = "SELECT * FROM student WHERE Dno='$dno'  AND section='$sem' ORDER BY fname";
    $result = mysqli_query($conn, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($conn);
    }

    
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
     <table 
border = 1 cellspacing = 0 cellpadding = 10>

      <tr>
         <th>profile</th>
        <th>first name</th>
         <th>last name</th>
          <th>address</th>
           <th>gender</th>
            <th>DNO</th>
             <th>USN</th>
              <th>campus id</th>
               <th>mobile number</th>
                <th>Date Of Birth</th>
                 <th>blood group</th>
                  <th>section</th>
                  

      </tr>

      <tr>

         <td> <img src="<?php echo "imagesuploadedf/".$row['pic']; ?>" height="200px" width="200px" /></td>
         
     <td>  <?php echo $row["fname"]; ?></td>
       <td>  <?php echo $row["lname"]; ?></td>
        <td>  <?php echo $row["address"]; ?></td>
         <td>  <?php echo $row["gender"]; ?></td>
          <td>  <?php echo $row["dno"]; ?></td>
           <td>  <?php echo $row["usn"]; ?></td>
            <td>  <?php echo $row["campusid"]; ?></td>
             <td>  <?php echo $row["mob"]; ?></td>
              <td>  <?php echo $row["dob"]; ?></td>
                <td> <?php echo $row["bloodgrp"]; ?></td>
                 <td> <?php echo $row["section"]; ?></td>
     

    </tr>
    <br>


    

      </table>



    <?php
      }
    } else {
    ?>
      <h3>No data Found!</h3>
    <?php
    }
    ?>
  </body>
</html>