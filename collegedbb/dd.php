<?php
  $conn = mysqli_connect('localhost','root','','uploadfile');


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
    <?php
    
    $query = "SELECT * FROM uploadedimage";
    $result = mysqli_query($conn, $query);
  
    if(!$result){
      echo $result . "<br/>" . mysqli_error($conn);
    }
    
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result)){
    ?>
      <img src="<?php echo "imagesuploadedf/".$row['imagename']; ?>" height="200px" width="200px" />
    <?php
      }
    } else {
    ?>
      <h3>No image Found!</h3>
    <?php
    }
    ?>
  </body>
</html>