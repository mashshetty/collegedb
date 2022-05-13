<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>image upload</title>
</head>
<body>

	<h1>image upload</h1>
	<form method="post" action=" " enctype="multipart/form-data">
		<label>choose an profile pic:</label><br>
		<input type="file" name="image" id="image"/><br>

		<label>choose username:</label><br>
		<input type="text" name="username" placeholder="enter username" id="username"/><br>

		<label>choose designation:</label><br>
		<input type="text" name="designation" placeholder="enter designation" id="designation"/><br>


		<input type="submit" name="upload" value="upload image/data"><br>
		

	</form>

</body>
</html>




<?php
$conn = mysqli_connect("localhost", "root", "", "up");


if(isset($_POST['upload']))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


	$username = $_POST['username'];
	$designation = $_POST['designation'];

	  $query = "INSERT INTO img (imgae,username,designation) 
                VALUES ($file, $username, $designation)";
           $results = mysqli_query($conn, $query);

           if($results){
           echo ' <script type="text/javascript"> alert("image uploaded successfullly!!")</script>';
         }


         else
         {
         	 echo ' <script type="text/javascript"> alert("image uploaded unsuccessful!!")</script>';

         }
}

?>


