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


$stmt = $conn->prepare("INSERT INTO mysqltable (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt-> bind_param("sss",  $firstname, $lastname, $email);


// set parameters and execute
$firstname = "Malik";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Ali";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Saida";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();














 ?>

</body>
</html>
