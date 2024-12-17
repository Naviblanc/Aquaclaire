<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "water station";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO `contact form` (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Form data successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>
