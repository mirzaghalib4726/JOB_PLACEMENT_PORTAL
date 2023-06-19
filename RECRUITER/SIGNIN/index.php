<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Recruiter Sign In Page</title>
  </head>
   <?php
   $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $sql = "SELECT * FROM RecruiterCredentials";

    $result = $conn->query($sql);

    if (mysqli_num_rows($result) === 0)
    {
       echo "<script>
        alert('No Recruiters Exists in DataBase.');
        alert('Quitting');
        window.location.href='../HOMEPAGE/index.html';
        </script>";
        die();
    }
  ?>
  <body>
    <div class="Signin-box">
      <h2>Sign In</h2>
      <form action="process.php" method="POST">
        <div class="user-box">
          <input
            type="text"
            name="Username"
            required
            pattern="^[a-z][a-z0-9.,$;]+$"
          />
          <label>Username</label>
        </div>
        <div class="user-box">
          <input
            type="password"
            name="Password"
            required
            minlength="4"
            maxlength="30"
          />
          <label>Password</label>
        </div>
        <a>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <button id="Submit">Sign In</button>
        </a>
      </form>
    </div>
  </body>
</html>
