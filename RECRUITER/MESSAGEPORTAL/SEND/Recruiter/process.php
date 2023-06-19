<?php
    session_start();

    $send = $_SESSION['User'];
    $receive = $_GET["RUsername"];
    $domain = $_SESSION['Domain'];
    $msg  = $_GET["Message"];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "LINKEDINPORTAL";

    $conn = new mysqli($server, $user, $pass, $dbname);

    $sql = "INSERT INTO RecruiterMessagePortal (Sender, Receiver, Domain, Status, Message) VALUES ('$send', '$receive', '$domain', 'New', '$msg')";

    $conn->query($sql);

    echo "<script>
    alert('Message Sent Sucessfully');
    window.location.href='./../MAIN/index.php';
    </script>";
    die();

?>
