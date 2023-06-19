<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../button.css" />
    <link rel="stylesheet" href="../style.css" />
    <title><?php  echo $_SESSION["User"] ?></title>
</head>
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $master = $_SESSION["User"];
 ?>
<body>
    <h2 style="color: white; text-align:center">Message Box</h2>

    <div class="Signin-box">
        <h2 style="color: white; text-align:center; margin: 0px;">Recruiters</h2>
        <span id="MessageR" class="glow"></span>
        <?php
            $sql = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$master' AND Domain = 'recruiter'";

            $result = $conn->query($sql);

            $ArrQ = array();

            while ($row = mysqli_fetch_assoc($result))
            {
                array_push($ArrQ, $row['Sender']);
            }

            $ArrQ = array_unique($ArrQ);

            $i = 0;
            for ($i = 0; $i < count($ArrQ); $i++)
            {
                $selector = $ArrQ[$i];

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$selector' AND Receiver = '$master'";
                $result = $conn->query($sql);
                $count = mysqli_num_rows($result);

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$master' AND Receiver = '$selector'";
                $result = $conn->query($sql);
                $count += mysqli_num_rows($result);

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$selector' AND Receiver = '$master' AND Status='New'";

                $result = $conn->query($sql);
                $MsgNew = mysqli_num_rows($result);
                ?>
                <div class="Signin-box">
                    <div style="text-align: center;">
                        <span style="color:red; font-size: 22px; text-transform: capitalize; font-weight: bold;" class="glow">
                            <?php
                                echo $ArrQ[$i];
                            ?>
                        </span>
                        <br>
                    </div>

                    <div style="color: yellow; font-size: 22px; font-weight: bold;">
                        <?php
                            echo $count." Messages";
                        ?>
                    </div>

                    <div class="glow">
                        <?php
                            echo '<br>'.$MsgNew." Unread";
                        ?>
                    </div>
                    <a>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <button onclick="window.location.href='../CHATBOX/index.php?id=<?php echo $ArrQ[$i]?>'">Open Chat Box</button>
                    </a>
                    <a>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <button onclick="window.location.href='delete.php?id=<?php echo $ArrQ[$i]?>'">Delete Conservation</button>
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="Signin-box">
        <h2 style="color: white; text-align:center; margin: 0px;">Users</h2>
        <span id="MessageU" class="glow"></span>
        <?php
            $sql = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$master' AND Domain = 'user'";

            $result = $conn->query($sql);

            $ArrQ = array();

            while ($row = mysqli_fetch_assoc($result))
            {
                array_push($ArrQ, $row['Sender']);
            }

            $ArrQ = array_unique($ArrQ);

            $i = 0;
            for ($i = 0; $i < count($ArrQ); $i++)
            {
                $selector = $ArrQ[$i];

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$selector' AND Receiver = '$master'";
                $result = $conn->query($sql);
                $count = mysqli_num_rows($result);

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$master' AND Receiver = '$selector'";
                $result = $conn->query($sql);
                $count += mysqli_num_rows($result);

                $sql = "SELECT * FROM RecruiterMessagePortal WHERE Sender = '$selector' AND Receiver = '$master' AND Status='New'";

                $result = $conn->query($sql);
                $MsgNew = mysqli_num_rows($result);
                ?>
                <div class="Signin-box">
                    <div style="text-align: center;">
                        <span style="color:red; font-size: 22px; text-transform: capitalize; font-weight: bold;" class="glow">
                            <?php
                                echo $ArrQ[$i];
                            ?>
                        </span>
                        <br>
                    </div>

                    <div style="color: yellow; font-size: 22px; font-weight: bold;">
                        <?php
                            echo $count." Messages";
                        ?>
                    </div>

                    <div class="glow">
                        <?php
                            echo '<br>'.$MsgNew." Unread";
                        ?>
                    </div>
                    <a>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <button onclick="window.location.href='../CHATBOX/index.php?id=<?php echo $ArrQ[$i]?>'">Open Chat Box</button>
                    </a>
                    <a>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <button onclick="window.location.href='delete.php?id=<?php echo $ArrQ[$i]?>'">Delete Conservation</button>
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
    <?php
        $sql = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$master' AND Domain = 'recruiter'";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 0)
        {
            ?>
                <script>
                    document.getElementById("MessageR").innerHTML = "No Messages.";
                </script>
            <?php
        }

        $sql = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$master' AND Domain = 'user'";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 0)
        {
            ?>
                <script>
                document.getElementById("MessageU").innerHTML = "No Messages.";
                </script>
        <?php
        }
    ?>
</body>
</html>
