<?php
$pagetitle = "Logout";
echo "<script>prompt('Logout Successful!');</script>";
require_once("assets/header.php");
session_destroy();
header("Location: index.php");
?>