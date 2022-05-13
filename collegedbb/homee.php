<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home page</title>
</head>
<body>

	<center>

		<?php
  $conn = mysqli_connect('localhost','root','','collegedb');

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());
 
}else{
echo "";
}



$c = "SELECT usn FROM student ORDER BY usn";
    $cc=mysqli_query($conn,$c);

    $roww = mysqli_num_rows($cc);

    ?>
<h2>Students : <?php echo $roww ?></h2>
<?php


$d = "SELECT staff_id FROM staff ORDER BY staff_id";
$dd = mysqli_query($conn,$d);

$rw = mysqli_num_rows($dd);
    ?>
<h2>Staffs : <?php echo $rw ?></h2>
<?php



$e = "SELECT subcode FROM subjects ORDER BY subcode";
$ee = mysqli_query($conn,$e);

$rww = mysqli_num_rows($ee);
    ?>
<h2>Subjects : <?php echo $rww ?></h2>
<?php



$v="SELECT SUM(pending) as `sm` FROM fees";
$vv  = mysqli_query($conn,$v);

$data = mysqli_fetch_array($vv);
 ?>
<h2>Pending fees : <?php echo $data['sm']; ?></h2>
<?php



?>
		
	</center>


<a href="dep.php">Manage department</a><br>
<a href="student.php">Manage student</a><br>
<a href="stafff.php"> Manage staff</a><br>
<a href="subject.php"> Manage subjects</a><br>
<a href="assign.php"> assign subjects</a><br>
<a href="marks.php">Manage marks</a><br>
<a href="at.php">Manage attendance</a><br>
<a href="fee.php">Manage fees</a><br>
<a href="fine.php">Manage fines</a><br>


</body>
</html>