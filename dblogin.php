<?php
session_start();

$uname = $_POST['email'];
$pass = $_POST['pass'];

//Handling Admin login to usersList.php
if($uname == "admin@gmail.com" && $pass == "admin2024"){
        $_SESSION['adminloggedin'] = true;
        header('Location: dashboard.php');
        exit();
}

//Handling the User Login to Access Dashboard.php

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

// Prepare and execute the SQL query to fetch the user details
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("SELECT * FROM Employee WHERE email = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    // Verify the password
    if ($user['Password']===$pass) {
        $_SESSION['userloggedin'] = $uname;
        // Redirect to the desired page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid password
        header("Location: login.php?invalidPass");
        exit();
    }
} else {
    // Invalid email or user does not exist
    header("Location: login.php?invalidEmail");
}

// Close the database connection
$stmt->close();
$conn->close();
exit();
?>