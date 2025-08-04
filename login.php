<?php
session_start();
$pagetitle = "Login";
require_once("assets/header.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password']) AND $row['verified'] != NULL) {
            echo "Login Successful";
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['role'] = $row['user_role'];
            // header("Location: index.php");

        } else {
            echo "Invalid email or password";
        }
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    } else {
        echo "Invalid email or password";
    }

}
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-11 mt-60 mx-md-auto">
                <div class="login-box bg-white pl-lg-5 pl-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-6">
                            <div class="form-wrap bg-white">
                                <h4 class="btm-sep pb-3 mb-5">Login</h4>
                                <form class="form" method="post" action="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-account"></span>
                                                <input type="text" id="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-email"></span>
                                                <input type="password" id="password"
                                                name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-12 text-lg-right">
                                            <a href="#" class="c-black">Forgot password ?</a>
                                        </div>
                                        <div class="col-12 mt-30">
                                            <button type="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content text-center">
                                <div class="border-bottom pb-5 mb-5">
                                    <h3 class="c-black">First time here?</h3>
                                    <a href="sign-up.html" class="btn btn-custom">Sign up</a>
                                </div>
                                <h5 class="c-black mb-4 mt-n1">Or Sign In With</h5>
                                <div class="socials">
                                    <a href="#" class="zmdi zmdi-facebook"></a>
                                    <a href="#" class="zmdi zmdi-twitter"></a>
                                    <a href="#" class="zmdi zmdi-google"></a>
                                    <a href="#" class="zmdi zmdi-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>