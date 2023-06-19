<?php
session_start();
include_once 'connect.php';

$field = $_GET['field'];
$data = $_POST['Data'];
$user = $_SESSION['User'];

echo $field.$data.$user;

$sql = "UPDATE RecruiterCredentials SET $field = '$data' WHERE UserName = '$user'";

$conn->query($sql);
header("Location: ./../index.php");

?>
