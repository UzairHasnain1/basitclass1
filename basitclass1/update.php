<?php

include 'newconn.php';

$student_name = $_POST['student_name'];

$showquery = "SELECT * from student ";

$showdata = mysqli_query($conn,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['btn'])){


    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $student_semester = $_POST['student_semester'];

$query = "update student set id='$id' student_name='$student_name', student_age='$student_age', student_semester='$student_semester' where userid=$userid ";

$res = mysqli_query($conn,$query);

header('location:show.php');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<center>
    <form method="post" id="myform">
		<br>Id:<br><br>
		<input name="text" value="<?php echo $arrdata['id']; ?>"/>
		<br><br>
		Student_name:<br><br>
		<input name="text" value="<?php echo $arrdata['student_name']; ?>"/>
		<br><br>
		Student_age:<br><br>
		<input name="number" value="<?php echo $arrdata['student_age']; ?>"/>
		<br><br>
		Student_semester:<br><br>
		<input name="text" value="<?php echo $arrdata['student_semester']; ?>"/>
		<br><br>
		<input type="submit" name="btn" value="submit">
	</form>
</center>

</body>
</html>