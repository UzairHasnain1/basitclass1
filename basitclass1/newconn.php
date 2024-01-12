<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'todayclass';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo 'Table';
}
else{
    echo 'Connection Failed';
}

?>