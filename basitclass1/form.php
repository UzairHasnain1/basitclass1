<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
    <form method="post" id="my_form" action="process.php">
		<br>Id:<br><br>
		<input type="number" name="id">
		<br><br>
		Student_name:<br><br>
		<input type="text" name="student_name">
		<br><br>
		Student_age:<br><br>
		<input type="number" name="student_age">
		<br><br>
		Student_semester:<br><br>
		<input type="text" name="student_semester">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
</center>

<script>
	const form = document.getElementById('my_form');
	
	form.reset();
	
	</script>

</body>
</html>