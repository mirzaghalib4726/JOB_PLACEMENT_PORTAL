<?php
session_start();
unset($_SESSION);
session_destroy();

echo "<script>
alert('Sign Out Sucessfully');
window.location.href='../HOMEPAGE/index.html';
</script>";
die();
 ?>
