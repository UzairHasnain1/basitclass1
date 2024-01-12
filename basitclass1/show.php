<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>

    table,thead,tr,th,td{
        border:2px solid black;
        background-color: tan;
    }

    table{
        width:70%;
        text-align:center;
    }


    </style>



</head>
<body>


<center>

<table>
<thead>
<tr>
<th>ID</th>
<th>STUDENT_NAME</th>
<th>STUDENT_AGE</th>
<th>STUDENT_SEMESTER</th>
<!-- <th>CITY</th> -->

<th colspan=2>ACTION</th>
</tr>
</thead>

<tbody>

<?php

include 'newconn.php';

$selectquery = "SELECT * from student";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

?>

<tr>

<td><?php echo $res['id']; ?></td>
<td><?php echo $res['student_name']; ?></td>
<td><?php echo $res['student_age']; ?></td>
<td><?php echo $res['student_semester']; ?></td>

<td><a href="update.php?id=<?php echo $res['id']; ?>&student_name=<?php echo $res['student_name']; ?>&student_age=<?php echo $res['student_age']; ?>&student_semester=<?php echo $res['student_semester']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $res['id']; ?>&student_name=<?php echo $res['student_name']; ?>&student_age=<?php echo $res['student_age']; ?>&student_semester=<?php echo $res['student_semester']; ?>">Delete</a></td>
<?php

}

?>

</tbody>

</table>
</center>



</body>
</html>