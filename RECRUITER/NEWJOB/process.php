<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $tit = $_POST['Title'];
    $desc = $_POST['Desc'];
    $id = $_SESSION['ID'];

    $sql = "INSERT INTO RecruiterJobs (R_ID, JobTitle, Job_Desc) VALUES ('$id', '$tit', '$desc')";

    $conn->query($sql);

    echo "<script>
    alert('Job Has Been Posted Successfully');
    window.location.href='../MAINPAGE/index.php';
    </script>";
 ?>
