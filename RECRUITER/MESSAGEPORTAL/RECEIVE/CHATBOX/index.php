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

    $receiver = $_GET['id'];

    $sender = $_SESSION["User"];

    $sql1 = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$receiver' AND Sender = '$sender'";
    $sql2 = "SELECT * FROM RecruiterMessagePortal WHERE Receiver = '$sender' AND Sender = '$receiver'";

    $result = $conn->query($sql1);

    $Arr = array();

    while ($row = mysqli_fetch_assoc($result))
    {
        array_push($Arr, $row['id']);
    }

    $result = $conn->query($sql2);

    while ($row = mysqli_fetch_assoc($result))
    {
        array_push($Arr, $row['id']);
    }

    sort($Arr);
 ?>
<body>
    <h2 style="color: white; text-align:center">Chat Box</h2>

    <div class="Signin-box" style="color:white;">
        <?php
            for ($i = 0; $i < sizeof($Arr); $i++)
            {
                $tempID = $Arr[$i];
                $sql = "SELECT * FROM RecruiterMessagePortal WHERE ID = '$tempID'";

                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);

                if ($row['Sender'] === $sender)
                {
                    ?>
                    <div class="Signin-box glow" style="text-align: right">
                        <?php
                            echo $row["Message"];
                        ?>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="Signin-box glow" style="text-align: left">
                         <?php
                            echo $row["Message"];

                            $sql = "UPDATE RecruiterMessagePortal SET Status = 'Read' WHERE ID = '$tempID'";
                            $conn->query($sql);
                        ?>
                    </div>
                    <?php
                }

            }

    ?>
        <form action="process.php?RUsername=<?php echo $receiver ?>" method="POST">
            <div class="Signin-box">
                <h2 style=" display: inline;">Type A Message:</h2>

                <br><br>

                <textarea name="Message" rows="2" cols="130" style="font-size: 18px;"></textarea>

                <br>

                <a>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                <button type="submit">Send</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>
