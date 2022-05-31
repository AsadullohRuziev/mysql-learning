<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";


//create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
echo "Connected successfully";


//CREATE DATABASE
$sql = "CREATE DATABASE myDB";


if ($conn->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

 ?>

</body>
</html>
