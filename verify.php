<?php
    // Adding pagetitle and header and mailer
    $pagetitle = "Verify your email address";
    require_once("assets/header.php");

    $email = $_GET["email"];

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $code = $_POST["code"];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND verification_code = ? LIMIT 1");
        $stmt->bind_param("ss", $email, $code);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows == 1) {
            $date =date("Y-m-d H:i:s");
            $stmt = $conn->prepare("UPDATE users SET verified = ?, verification_code = NULL WHERE email = ?");
            $stmt->bind_param("ss", $date, $email);
            $stmt->execute();
            echo "Verification successful";
        } else {
            echo "Invalid code";
        }
    }
?>
<h3><?= $email ?></h3>
<form action="" method="post">
    <input type="text" name="code" placeholder="Enter verification code"/>
    <input type="submit" value="Verify Email"/>
</form>