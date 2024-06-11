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
    <?php
      include_once('nav-common.php');
    ?>
    <div class="container-md text-center mt-5 hero-text" style="max-width: 500px; position: absolute; top: 0; bottom: 0; right: 0; left: 0; align-self: center; padding: 40px; border: 2px solid lightgrey;">
      <h1 class="mb-4">Welcome Back!</h1>
      <form action = "dblogin.php" method="POST">
          <div class="mb-3">
              <input type="email" onkeyup="hideAlert()" name="email" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required>
          </div>
          <div class="mb-3">
              <input type="password" name="pass" class="form-control text-center" id="exampleInputPassword" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary mb-3" onclick="login()">Sign In</button>
          <?php
          if (isset($_GET['newAccount'])) {
              echo '<p class="text-success">Account Created Successfully </br> Sign In to Continue</p>';
          } else {
            echo "<p>Don't have an Account? <a href='register.html'>Register Here</a></p>";
          }
          
          ?>
      </form>
      <?php
      if(isset($_GET['invalidPass'])) {
        echo(
          '<div id="alert" class="alert alert-danger mt-3" role="alert">
            Invalid password. Please try again.
          </div>'
        );
      } else if(isset($_GET['invalidEmail'])) {
         echo(
          '<div id="alert" class="alert alert-danger mt-3" role="alert">
            Invalid email or user does not exist.
           </div>'
          );
      }
    
    ?>
    </div>
    <script>
    function hideAlert() {
      var alertBox = document.getElementById("alert");
      alertBox.style.display = "none";
    }
  </script>
  </body>
</html>