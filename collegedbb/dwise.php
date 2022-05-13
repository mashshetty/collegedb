 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Department Wise</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<center>



  
  
<a href="student.php" class="btn btn-outline-secondary" > Go Back</a>
  
  <div class="container">
     
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    View Department Wise
                </h2>
            </div>




          <form method="post" class="card-form" action="dsee.php">

          <div class="input">
     



<label for="dno" class="input-label">Choose Department</label>
</div><br>

<select class="input-field" name="dno" id=""><br>
            <option value="1"> CSE</option>
            <option value="2">EC </option>
            <option value="3">EEE </option>
            <option value="4"> IS</option>
            <option value="5">ME </option>
</select><br>


<div class="input">    
  <label for="sem" class="input-label">Choose Semester</label>
</div><br>

<select class="input-field" name="sem" id=""><br>
  <option value="1">1</option>
  <option value="2">2 </option>
  <option value="3">3 </option>
  <option value="4">4</option>
  <option value="5">5 </option>
  <option value="6">6 </option>
  <option value="7">7 </option>
  <option value="8">8 </option>
  
</select><br>

<div class="action">
  <input type="submit" class="action-button" name="submit" value="SUBMIT">
</div>
</form>


      

</center>
</body>
</html>