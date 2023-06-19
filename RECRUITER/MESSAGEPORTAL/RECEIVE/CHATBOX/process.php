<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $s = $_SESSION['User'];
    $r = $_GET['RUsername'];
    $d = $_SESSION['Domain'];
    $msg = $_POST['Message'];

    $sql = "INSERT INTO RecruiterMessagePortal (Sender, Receiver, Domain, Status, Message) VALUES ('$s', '$r', '$d', 'New', '$msg');";
    $conn->query($sql);

    echo "<script>
    alert('Message Sent Sucessfully');
    window.location.href='index.php?id=$r';
    </script>";
    die();

?>
