<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OneStop Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon_io/site.webmanifest">
    <style>
      .hero-text {
          text-align: center;
          padding: 75px 0;
          background-color: #f8f9fa;
          color: #333;
          font-weight: 100;
      }

      .hero-text h1 {
          font-size: 48px;
          margin-bottom: 24px;
          font-weight: 300;
      }

      .hero-text p {
          font-size: 18px;
          margin-bottom: 48px;
      }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imgs/favicon_io/favicon-32x32.png" alt="Logo"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
    <?php
    if(isset($_SESSION['adminloggedin'])) {
      echo(
        '<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="usersList.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="signOut.php">Logout</a>
          </li>'
      );
    }else if(isset($_SESSION['userloggedin'])) {
      echo(
        '<li class="nav-item">
           <a class="nav-link active" aria-current="page" href="index.php">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="signOut.php">Logout</a>
         </li>'
      );
    }else {
      echo(
        '<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login.php">Sign In</a>
          </li>'
      );
    }
    ?>
        </ul>
      </div>
    </div>
  </nav>
    
  <div class="container">
    <div class="hero-text" style="background-color: white;">
      <img src="imgs/favicon_io/android-chrome-192x192.png" alt="Logo">
      <h1>OneStop Employee Cloud</h1>
      <p class="lead">Your solution for all employee management needs.</p>
      <?php
      if(isset($_SESSION['adminloggedin'])) {
        echo(
          '<a href="usersList.php" class="btn btn-primary btn-lg">Admin Panel</a>'
        );
      } else if(isset($_SESSION['userloggedin'])) {
        echo(
          '<a href="dashboard.php" class="btn btn-primary btn-lg">User Dashboard</a>'
        );
      } else {
        echo(
          '<a href="register.html" class="btn btn-primary btn-lg">Get Started for Free</a>'
        );
      }
      ?>
  </div>

  <div id="services" class="container mt-3" style="text-align: center;">
    <div class="columns">
      <h2 class="hero-text" style="background-color: white; padding: 50px; font-weight: 150;">Our Services</h2>
        <div class="row-md-4 mt-3" style="width: 50%;">
            <div class="card">
              <img src="imgs/1.gif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 400;">Employee Onboarding</h5>
                </div>
            </div>
        </div>
        <div class="row-md-4 mt-5" style="width: 50%; margin-left: 50%;">
          <img src="imgs/2.gif" class="card-img-top" alt="...">  
          <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 400;">Time and Attendance Tracking</h5>
                </div>
            </div>
        </div>
        <div class="row-md-4 mt-5" style="width: 50%;">
          <img src="imgs/3.gif" class="card-img-top" alt="...">  
          <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 400;">Leave Management</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>