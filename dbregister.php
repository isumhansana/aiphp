<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " );
}

// Retrieve data submitted by the form
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$dateOfBirth = $_POST['dateOfBirth'];
$password = $_POST['password'];

// Prepare and execute the SQL query to insert the data into the Employee table
$sql = "INSERT INTO Employee (email, firstName, lastName, gender, phone, salary, dateOfBirth, password) VALUES ('$email', '$firstName', '$lastName', '$gender', '$phone', '$salary', '$dateOfBirth', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>