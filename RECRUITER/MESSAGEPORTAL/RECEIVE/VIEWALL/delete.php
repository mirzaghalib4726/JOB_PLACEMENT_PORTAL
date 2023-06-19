<?php
    session_start();

    $DUser = $_GET['id'];
    $MUser = $_SESSION['User'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $sql = "DELETE FROM RecruiterMessagePortal WHERE Sender = '$DUser' AND Receiver = '$MUser' AND Domain = 'Recruiter'";

    $conn->query($sql);

    $sql = "DELETE FROM RecruiterMessagePortal WHERE Sender = '$MUser' AND Receiver = '$DUser' AND Domain = 'Recruiter'";

    $conn->query($sql);

    echo "<script>
    alert('Conversation Deleted');
    window.location.href='index.php?id=$DUser';
    </script>";
    die();
?>
