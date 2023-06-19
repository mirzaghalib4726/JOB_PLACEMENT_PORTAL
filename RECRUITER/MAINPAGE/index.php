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
        <h2>Home</h2>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='./../PERSONALDATA/index.php'">View Personal Information</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='./../NEWJOB/index.php'" >Post a Job</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button >View Posted Jobs</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button  onclick="window.location.href='../MESSAGEPORTAL/SEND/MAIN/index.php'" >Send a Message</button>
            </a>
            <br>
             <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='../MESSAGEPORTAL/RECEIVE/VIEWALL/index.php'" >View Your MailBox</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='../SIGNOUT/index.php'">Sign Out</button>
            </a>
            <br>
            <a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button onclick="window.location.href='../DEACTIVATE/index.php?'">Deactivate Account</button>
            </a>
        </center>
    </div>
</body>
</html>
