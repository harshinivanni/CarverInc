<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['client']);
header("Location:login.php");
?>