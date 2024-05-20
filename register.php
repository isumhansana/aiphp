<!doctype html>
<html lang="en">
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
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="login.php">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  <div class="container-md text-center mt-4 mb-4 hero-text" style="max-width: 500px; padding: 20px; border: 2px solid lightgray;">
    <h1 class="mb-4">Get Registered</h1>
    <form action="dbregister.php" method="post">
        <div class="mb-3">
            <input type="email" class="form-control text-center" id="exampleInputEmail1" name ="email" aria-describedby="emailHelp" placeholder="Email address">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control text-center" id="password" name="password" placeholder="Password">
      </div>
        <div class="mb-3">
            <input type="text" class="form-control text-center" id="exampleInputFirstName" name="firstName" placeholder="First Name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control text-center" id="exampleInputLastName" name="lastName" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <input type="tel" class="form-control text-center" id="exampleInputPhone" name="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control text-center" id="exampleInputSalary" name="salary" placeholder="Salary">
        </div>
        <div class="mb-3">
            <label class="fw-normal">Date of Birth</label>
            <input type="date" class="form-control text-center fw-light" id="exampleInputDOB" name="dateOfBirth" placeholder="Date of Birth">
        </div>
        <div class="mb-3">
            <div class="row text-center">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="exampleInputMale" value="m" checked>
                        <label class="form-check-label" for="exampleInputMale">Male</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="exampleInputFemale" value="f">
                        <label class="form-check-label" for="exampleInputFemale">Female</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3" onclick="register()">Register</button>
        <p>Already have an Account? <a href="login.html">Sign In</a></p>
    </form>
    <?php
    if(isset($_GET['error'])) {
      echo('<div class="alert alert-danger mt-3" role="alert">
        User with the same email already exists
      </div>');
    }
    
    ?>
  </div>
  </body>
</html>