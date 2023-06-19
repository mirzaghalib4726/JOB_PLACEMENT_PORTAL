<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli ($server, $user, $pass, $dbname);

    if (!($conn->connect_error))
    {
        $fname = $_POST['FName'];
        $lname = $_POST['LName'];
        $email = $_POST['Email'];
        $phone = $_POST['PhoneNo'];
        $cnic = $_POST['CNIC'];
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
        $cpass = $_POST['CPassword'];

        $sql = "SELECT * FROM RecruiterCredentials WHERE Username = '$uname'";

        $result = $conn->query($sql);

        $sql = "INSERT INTO RecruiterCredentials (FirstName, LastName, Email, PhoneNo, CNIC, Username, Password) VALUES ('$fname', '$lname', '$email', '$phone', '$cnic', '$uname', '$pass')";

        if ($pass === $cpass)
        {
            $conn->query($sql);

            echo "<script>
            alert('Recruiter Has Been Created Successfully');
            window.location.href='../HOMEPAGE/index.html';
            </script>";
            die();
        }
    }
 ?>
