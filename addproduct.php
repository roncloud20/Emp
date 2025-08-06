<?php
$pagetitle = "Add Product";
require_once("assets/header.php");

if(!isset($_SESSION['email']) && ($_SESSION['role'] !== "admin" || $_SESSION['role'] !== "vendor")) {
    header("Location: login.php");
}
?>

<main>
    <h1>Add Product</h1>
    <form action="" method="post">
        <input type="file" name="image" id="image"/> <br/>
        <img src="" alt="Product Image" id="preview"/>
    </form>
</main>

<script>
    const image = document.getElementById("image");
    const preview = document.getElementById("preview");
</script>