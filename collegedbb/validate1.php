<!DOCTYPE html>
<html>
<head>
<link id="pagestyle" href="/assets/css/material-dashboard.css" rel="stylesheet" >
  <meta charset="utf-8">
  <title></title>
</head>
<body >



	<?php
		$db = mysqli_connect('localhost','root','','collegedb');

if (!$db) {

  die("Connection failed: " . mysqli_connect_error());
}else{
echo "";
} 



$username = $_POST['username'];
$password = $_POST['password'];


$q= "SELECT * FROM student WHERE usn='$username' AND dob='$password'";
$qq = mysqli_query($db,$q);




if(!$qq){
  echo "error!!";
}

if(mysqli_num_rows($qq)>0){

$p = "SELECT pending FROM fees WHERE usssn='$username'";
$pp = mysqli_query($db,$p);

$r = mysqli_fetch_array($pp);


$f = "SELECT amount,reason FROM fine WHERE ussn='$username'";
$ff = mysqli_query($db,$f);

$rr = mysqli_fetch_array($ff);





while($row = mysqli_fetch_array($qq)){

$fname = $row["fname"];
$lname = $row["lname"];
  echo "<h1>welcome ".$fname." ".$lname."...</h1>";

$sem = $row["section"];


?>


<br>
<h2>Pending fees : <?php  echo $r['pending']; ?></h2>
<h2>fine for <?php  echo $rr['reason']; ?>  : <?php  echo $rr['amount']; ?></h2>


<?php





  ?>
    
     <br><br>
          <center>
            <h1><strong>Personel Details</strong></h1>
            <img src="<?php echo "imagesuploadedf/".$row['pic']; ?>" height="280px" width="330px" border="3" /> <br> <br>


<table class="table table-success table-striped">

      

    <tr>
        <td><strong>FIRST NAME : </strong> <?php echo $row["fname"]; ?></td>
        
          <td><strong>LAST NAME : </strong><?php echo $row["lname"]; ?></td> 
    </tr>


     <tr>
        <td><strong> ADDRESS : </strong><?php echo $row["address"]; ?></td>
        
          <td><strong> SEM :</strong><?php echo $row["section"]; ?></td> 
    </tr>

    <tr>
        <td><strong>DEPARTMENT : </strong> <?php echo $row["dno"]; ?></td>
        
          <td><strong>USN : </strong><?php echo $row["usn"]; ?></td> 
    </tr>


    <tr>
        <td><strong>CAMPUS ID : </strong> <?php echo $row["campusid"]; ?></td>
        
          <td><strong>MOBILE : </strong><?php echo $row["mob"]; ?></td> 
    </tr>


    <tr>
        <td><strong> DATE OF BIRTH : </strong> <?php echo $row["dob"]; ?></td>
        
          <td><strong> BLOOD GROUP : </strong><?php echo $row["bloodgrp"]; ?></td> 
    </tr> 
  </table>
       
    <?php
  

}


?>




<h1>Subjects you have:</h1>

 <?php
    
    $query = "SELECT * FROM subjects WHERE year='$sem' ";
    $result = mysqli_query($db, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($conn);
    }

    
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
<table class="table table-hover">

      <tr>
         <th>subject name</th>
        <th>subject code</th>

      </tr>

      <tr>

         
         
     <td>  <?php echo $row["subname"]; ?></td>
       <td>  <?php echo $row["subcode"]; ?></td>
      
    </tr>
    <br>


    

      </table>



    <?php
      }
    } else {
    ?>
      
    <?php
    }
    ?>



<h1>Marks you obtained:</h1>
<?php


$query = "SELECT uusn,fname,scode,subname,IA1,IA2,IA3 FROM marks,student,subjects WHERE uusn=usn AND uusn='$username' AND scode=subcode ORDER BY uusn";
    $result = mysqli_query($db, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($db);
    }



    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
<table class="table table-dark table-hover">

      <tr>
         <th>USN</th>
         <th> STUDENT NAME</th>
        <th>SUBJECT</th>
      <th>SUBJECT</th>
            <th>IA1</th>
            <th>IA2</th>
            <th>IA3</th>
         
                

      </tr>

      <tr>

         
     <td>  <?php echo $row["uusn"]; ?></td>
     <td>  <?php echo $row["fname"]; ?></td>
       <td>  <?php echo $row["scode"]; ?></td>
        <td>  <?php echo $row["subname"]; ?></td>
          <td>  <?php echo $row["IA1"]; ?></td>
             <td>  <?php echo $row["IA2"]; ?></td>
                <td>  <?php echo $row["IA3"]; ?></td>
                   
          
     

    </tr>
    <br>

      </table>

    <?php
      }
    } 
     else {
    ?>
      <h3><br><br>No Data Found!!</h3>
    <?php
    }

?>
 <h1>Attendance List:</h1>
<?php



 $query = "SELECT * FROM attendance WHERE usnn='$username' ORDER BY usnn";
    $result = mysqli_query($db, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($db);
    }



     if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>


<table class="table table-bordered">

      <tr>
         <th>SUBJECT CODE</th>
        <th>USN</th>
         <th>DATE</th>
           <th>TOTAL</th>
            <th>ATTENDED</th>
             <th>PERCENTAGE %</th>
          
                 
                  

      </tr>

      <tr>

         
     <td>  <?php echo $row["usnn"]; ?></td>
       <td>  <?php echo $row["sub"]; ?></td>
        <td>  <?php echo $row["date"]; ?></td>
         <td>  <?php echo $row["total"]; ?></td>
          <td>  <?php echo $row["attended"]; ?></td>
           <td>  <?php echo $row["percentage"]; ?></td>
          
     

    </tr>
    <br>


    

      </table>



    <?php
      }
    } else {
    ?>
      <h2><br><br>No data found!!</h2>
    <?php
    }
   



}



else{
 echo "<h1>wrong username or password!!";
}




      ?>

      </body>
</html>

