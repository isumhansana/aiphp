<?php
    session_start();
    if(!isset($_SESSION['adminloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OneStop Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io//favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon_io//site.webmanifest">
    <style>
      .hero-text {
          text-align: center;
          margin-top: 10vh;
          color: #333;
          font-weight: 100;
      }
    </style>
  </head>
<body>
  <?php
    include_once('nav-logged.php');
  ?>
    <div class="container">
        <h1 class="hero-text mb-4">Employee Details</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to select the desired columns from the "Employee" table
                $sql = "SELECT FirstName, LastName, Email, Salary, Phone, DateOfBirth, Password FROM Employee";

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        // Display the data in table rows
                        echo "<tr>";
                        echo "<td class='p-3'>" . $row["FirstName"] . "</td>";
                        echo "<td class='p-3'>" . $row["LastName"] . "</td>";
                        echo "<td class='p-3'>" . $row["Email"] . "</td>";
                        echo "<td class='p-3'>" . $row["Salary"] . "</td>";
                        echo "<td class='p-3'>" . $row["Phone"] . "</td>";
                        echo "<td class='p-3'>" . $row["DateOfBirth"] . "</td>";
                        echo "<td class='p-3'>" . $row["Password"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>