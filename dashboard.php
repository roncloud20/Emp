<?php
// session_start();
$pagetitle = "Dashboard";
require_once("assets/header.php");

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}

echo $_SESSION['email'];

?>

<main>
    <h1>Welcome to dashboard</h1>
</main>