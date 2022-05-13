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
  </head>
  <body>
    <center>

    <h2><a href="fine.php">go back</a></h2>

   

    <?php
    
    $query = "SELECT * FROM fine";
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
         <th>USN</th>
        <th>reason</th>
         <th>amount</th>
      </tr>

      <tr>

         
         
     <td>  <?php echo $row["ussn"]; ?></td>
       <td>  <?php echo $row["reason"]; ?></td>
        <td>  <?php echo $row["amount"]; ?></td>
         
             
                
     

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
    </center>
  </body>
</html>