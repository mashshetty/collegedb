<?php
		$db = mysqli_connect('localhost','root','','collegedb');



 // Check connection
 // Check connection
if (!$db) {

  die("Connection failed: " . mysqli_connect_error());

  

  
}else{
echo "";
}

if(isset($_POST['submit'])){

$usn = $_POST['ussn'];
$reason = $_POST['reason'];
$amount = $_POST['amount'];



       $query = "INSERT INTO fine (ussn,reason,amount) 
                VALUES ('$usn', '$reason','$amount')";
           $results = mysqli_query($db, $query);

           if($results){
           echo ' <h1> fined successfully!</h1>';
       }
       else{
         echo ' <h1>some error occured..subject not assigned!</h1>';

       }




}


    
      ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>fine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><center>

<h3><a href="seefine.php">See Fines</a></h3>
<h3><a href="home.php">Go back</a></h3>

    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                  Fine
                </h2>
            </div>

            <form method="post" class="crad-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="input">
                
                    <input type="option" class="input-field" name="ussn" placeholder="" required>

                    <label class="input-label">Enter Student USN</label>
                </div>
                            <div class="input">
                                <input type="text" class="input-field" name="reason" placeholder="" required>
                    
                                <label class="input-label">Enter Reason</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="amount" required/>
                    <label class="input-label">Enter Amount</label>
                </div>
                <div class="input">
                <label class="input-label" for="status">Paid Status</label>
                    </div>
                <select class="input-field" name="status">
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