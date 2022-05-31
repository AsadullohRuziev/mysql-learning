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
$dbname = "mydb";


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}


$sql = "SELECT id,  firstname, lastname, email FROM mysqltable WHERE lastname='Deep' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]." ".$row["email"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();










 ?>

</body>
</html>
