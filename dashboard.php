<?php
    session_start();
    if(!(isset($_SESSION['userloggedin']) || isset($_SESSION['adminloggedin']))) {
        header('Location: login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OneStop Employee Cloud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io//favicon-16x16.png">
  <link rel="manifest" href="imgs/favicon_io//site.webmanifest">
  <style>
    .hero-text {
      text-align: center;
      padding: 100px 0;
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

    .dash-card-text {
      text-align: center;
      font-size: 28px;
      margin-top: 1vh;
      font-weight: 200;
    }

    .dash-card {
      text-decoration: none;
      transition: all 0.5s;
    }

    .dash-card:hover {
      box-shadow: 0px 0px 10px rgb(0, 30, 51);
      transform: scale(1.02);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imgs/favicon_io/favicon-32x32.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="signOut.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-md text-center mt-5 hero-text" style="max-width: 900px; padding: 0px; background-color: white;">
    <h1>OneStop Dashboard</h1>

    <div class="row">
      <?php
        if(isset($_SESSION['adminloggedin'])) {
          echo(
            '<div class="col-md-4 mb-4">
              <a href="usersList.php" class="card p-4 rounded-5 dash-card" style="width: 18rem;">
                <img src="imgs/dashboard/userListAdmin.png" class="card-img-top mb-2" alt="...">
                <h5 class="dash-card-text">Employee Details</h5>
              </a>
            </div>'
          );
        }
      ?>
      <div class="col-md-4 mb-4">
        <a href="notes/index.php" class="card p-4 rounded-5 dash-card" style="width: 18rem;">
          <img src="imgs/dashboard/notes.png" class="card-img-top mb-2" alt="...">
          <h5 class="dash-card-text">Notes App</h5>
        </a>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>


</body>

</html>