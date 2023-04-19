<?php
//Set up the database access credentials
$hostname = 'localhost'; 
$username = 'root'; 
$password = '';  
$databaseName = 'test';

$conn = mysqli_connect($hostname, $username, $password, $databaseName);
if($conn)
{
//    echo "Connection successfull";
}
else{
    echo "Connection failed" . mysqli_connect_error();
}
?>