<?php
    session_start();
    if(!(isset($_SESSION['userloggedin']) || isset($_SESSION['adminloggedin']))) {
        header('Location: ../login.php');
        exit();
    }

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aiphp";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $listName = $_POST['listName'];
        $caption = $_POST['caption'];
        
        if(isset($_SESSION['userloggedin'])){
            $email=$_SESSION['userloggedin'];
        }else{
            $email="admin@gmail.com";
        }

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO task (listName, caption, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $listName, $caption, $email);

        if ($stmt->execute()) {
            header("Location: index.php?inserted");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }

    //check if delete request is made
    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "DELETE FROM task WHERE taskID = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?deleted");
            exit();
        }
        $conn->close();
    }    
?>