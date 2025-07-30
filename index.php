<?php
    // Adding pagetitle and header
    $pagetitle = "Welcome to Emprint Nation";
    require_once("assets/header.php");
    $text = "New Horizon";
    echo $text . "<br/>";
    echo sha1($text) . "<br/>";
    echo md5($text) . "<br/>";
    echo password_hash($text, PASSWORD_DEFAULT) . "<br/>";
?>
<main>
    <h1>Welcome to Emprint Nation</h1>
</main>

<!-- Adding Footer -->
<?php
    require_once("assets/footer.php");
?>