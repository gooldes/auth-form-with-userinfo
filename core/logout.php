<?php
session_start();
$_SESSION['login'] = "";
$_SESSION['hash'] = "";
$_SESSION['id'] = "";
session_destroy();
header("Location: ../index.php");
?>
