<?php
    session_start();

    $Muser = $_POST['Username'];
    $Mpass = $_POST['Password'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM RecruiterCredentials WHERE (Username = '$Muser' AND Password = '$Mpass')";

    $result = $conn->query($sql);

    if (!(mysqli_num_rows($result) == 0))
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["ID"] = $row["id"];
        $_SESSION["User"] = $Muser;
        $_SESSION['Domain'] = 'recruiter';

        echo "<script>
            alert('Sign In Sucessfully');
            window.location.href='./../MAINPAGE/index.php';
            </script>";
            die();
    }
    else
    {
         echo "<script>
            alert('No Users Found');
            window.location.href='index.php';
            </script>";
            die();
    }
?>
