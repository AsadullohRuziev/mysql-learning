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
echo "Connected successfully";




// sql to create table

$sql = "INSERT INTO mysqltable(firstname, lastname, email) VALUES('Jek', 'Deep', 'jek@deep.com');";
$sql .= "INSERT INTO mysqltable(firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO mysqltable(firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully multi_query";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();














 ?>

</body>
</html>
