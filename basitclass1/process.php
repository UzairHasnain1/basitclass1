<?php
include_once 'conn.php';
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $Student_name = $_POST['Student_name'];
    $Student_age = $_POST['Student_age'];
    $Student_semester = $_POST['Student_semester'];

    $sql = "INSERT INTO student (id,student_name,student_age,student_semester)
    VALUES ('$id','$student_name','$student_age','$student_semester')";
    if(mysqli_query($conn,$sql))  {
        // echo "New record created  successfully !";
        header('location:show.php');
    }

}




?>