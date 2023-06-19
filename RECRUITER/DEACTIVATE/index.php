<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "LINKEDINPORTAL";
$ID = $_SESSION['ID'];

$conn = new mysqli($server, $user, $pass, $dbname);

$sql ="DELETE FROM RecruiterCredentials WHERE id = $ID";

$conn->query($sql);

unset($_SESSION);
session_destroy();

echo "<script>
alert('Account Deactivated Successfully');
window.location.href='../HOMEPAGE/index.html';
</script>";
die();
 ?>
