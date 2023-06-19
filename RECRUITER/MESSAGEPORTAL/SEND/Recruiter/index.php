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

    $sql = "SELECT * FROM RecruiterCredentials";

    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 1)
    {
         echo "<script>
        alert('No Recruiter Available.');
        window.location.href='./../MAIN/index.php';
        </script>";
        die();
    }
?>
<body>
    <div class="Signin-box">
        <center>
            <form action="process.php" method="GET">

                <textarea name="Message" rows="4" cols="50">

                </textarea>
                <br>
                <label for="cars" style="color: white">Choose The Recruiter To Send Message: </label>
                <select name="RUsername">
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            if ($row['UserName'] != $_SESSION['User'])
                            {
                                ?>
                                <option value="<?php echo $row['UserName'] ?>"> <?php echo $row['UserName'] ?> </option>
                                <?php
                            }
                        }
                    ?>
                </select>
                <br>
                <br>
                <input type="submit" value="Send">
            </form>
        </center>
    </div>
</body>
</html>
