<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login Form</title>
  </head>
  <body>
    <div class="container">
      <img class="wave" src="image/wave.svg" alt="There was a wave" />
      <div class="img">
        <img
          class="team-img"
          src="image/certificate.svg"
          alt="team working on project"
        />
      </div>
      <div class="login-container">
        <form action="login.php" method="post">
          <img
            class="avatar"
            src="image/avtar.svg"
            alt="avatar of person logging in"
          />
          <h2>Promise Served!</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <!-- php code goes here -->
            <?php if ( isset($_GET['error'])) { ?>
                   <p class="error"> <?php echo $_GET['error'] ;?> </p> 
            <?php } ?>
            <!-- php code ends here -->
            <div>
              <h5>Username</h5>
              <input class="input" type="text" name="username" />
            </div>
          </div>
          <div class="input-div two">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div>
              <h5>Password</h5>
              <input class="input" type="password" name="password" />
            </div>
          </div>
          <a href="">forgot password?</a>
          <input class="btn" type="submit" name="submit" value="login" />
        </form>
      </div>
    </div>
  </body>
</html>
