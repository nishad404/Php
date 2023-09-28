<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="user3";

$conn=new mysqli($servername,$username,$password,$databaseName);  //database connect
//database connect error hole die 
if($conn->connect_error){
    die("connection failed : " .$conn->connect_error);   ///connection time error ta show korbe
}
$sql="CREATE DATABASE IF NOT EXISTS $databaseName";
if($conn->query($sql)===TRUE){
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();
?>
