<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="style.css" />
    <title><?php  echo $_SESSION["User"] ?></title>
</head>
<body>
    <div class="Signin-box">
        <center>
        <h2>Message Portal</h2>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='../Recruiter/index.php'">To Recruiter</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='../User/index.php'" >To User</button>
            </a>
            <br>
            </a>
        </center>
    </div>
</body>
</html>
