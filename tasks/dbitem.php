<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

// Check if a search request is made
if(isset($_GET['taskID']) && !empty($_GET['taskID'])) {
    $taskID = $_GET['taskID'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT listName FROM task WHERE taskID = '$taskID'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row["listName"];
    } else {
        echo "No task found with that ID";
    }
    $conn->close();
}
?>