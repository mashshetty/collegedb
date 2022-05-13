<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    
    
    
    
    
        $dname = "";
      $dno = "";
      $hod = "";
      $location = "";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         $dname = $_POST['dname'];
        $dno = $_POST['dno'];
         $hod = $_POST['hod'];
          $location = $_POST['location'];
    
           $query = "INSERT INTO department (dname,dno,hod,location) 
                    VALUES ('$dname', '$dno', '$hod', '$location')";
               $results = mysqli_query($db, $query);
    
               if($results){
               echo ' <h1>department added successfully!</h1>';
           }
       
        
      
      mysqli_close($db);
    }
    
    
    
    
    
        ?>
    
    








    <a href="deldep.php" class="btn btn-outline-secondary">Delete Department</a>

    <a href="home.php" class="btn btn-outline-secondary" >Go Back</a>


    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Add Department
                </h2>
            </div>

            <form method="post" class="crad-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="input">
                
                    <input type="option" class="input-field" name="dname" placeholder="" required>

                    <label class="input-label">Department Name</label>
                </div>
                            <div class="input">
                                <input type="text" class="input-field" name="dno" placeholder="" required>
                    
                                <label class="input-label">Department Number</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="hod" required/>
                    <label class="input-label">Enter HOD Name</label>
                </div>

                <div class="input">
                    <input type="text" class="input-field" name="location" required/>
                    <label class="input-label">Enter Departmenmt Location</label>
                </div>

                <div class="action">
                    <input type="submit" class="action-button" name="submit" value="SUBMIT">
                </div>
            </form>


          
        </div>
    </div>


</center>

</body>
</html>


