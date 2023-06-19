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

    $field =  $_GET['Text'];
    $Muser = $_SESSION['User'];

    include_once 'connect.php';

    $sql = "SELECT * FROM RecruiterCredentials WHERE UserName = '$Muser'";

    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);
?>
<body>
<center>
    <div class="Signin-box">
        <form action="UpdateData.php?field=<?php echo $field ?>" method="POST">
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

                <tr style="padding: 1px; margin: 1px;">
                    <th style="border: 1px solid yellow;  text-align: center; color: #a2ff00;">
                        <?php  echo $field ?>
                    </th>

                    <th style="border: 1px solid yellow; color: #a2ff00;">
                        <input type="text" value=" <?php echo $row[$field] ?>" required Name="Data" style="font-size: 22px; text-align: center;">
                    </th>

                   <td style="text-align: center;">
                        <button type="Submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Update
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
