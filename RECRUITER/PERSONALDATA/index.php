<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $MUser = $_SESSION["User"];

    $sql = "SELECT * FROM RecruiterCredentials WHERE Username = '$MUser'";

    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);

?>
<body>
<center>
    <div class="Signin-box">
        <h1>
            Personal Information
        </h1>
        <table style="border: 1px solid red; margin: 5px;">

            <tr style="padding: 1px; margin: 1px;">
                <th style="border: 1px solid yellow;  text-align: center; color: #a2ff00;">
                    Field
                </th>

                <th style="border: 1px solid yellow; text-align: center; color: #a2ff00;">
                    Value
                </th>

                <th style="text-align: center; color: #a2ff00;">
                        Action
                </th>

            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    First Name
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['FirstName']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=FirstName">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>

            </tr>

            <tr>
                <th style="border: 1px solid yellow; text-align: center;">
                    Last Name
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['LastName']; ?>
                </td>

                 <td style="text-align: center;">
                    <a href="Update/update.php?Text=LastName">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    Email
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['Email']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=Email">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    Phone No
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['PhoneNo']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=PhoneNo">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    CNIC
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['CNIC']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=CNIC">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    UserName
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['UserName']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=UserName">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

            <tr>
                <th style="border: 1px solid yellow;">
                    Password
                </th>

                <td style="border: 1px solid yellow; text-align: center;">
                    <?php echo $row['Password']; ?>
                </td>

                <td style="text-align: center;">
                    <a href="Update/update.php?Text=Password">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Update
                    </a>
                </td>
            </tr>

        </table>
    </div>
</center>
</body>
</html>
