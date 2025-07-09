<?php
// Adding pagetitle and header
$pagetitle = "Create an Account";
require_once("assets/header.php");

$firstName = $lastName = $email = $password = $confirmPassword = $tel = $dob = $gender = $role = "";


if($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $tel = $_POST['tel'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    echo "<h1>$firstName, $lastName, $email, $password, $confirmPassword, $tel, $dob, $gender, $role</h1>";
}
?>
<main>
    <!-- Registration 9 - Bootstrap Brain Component -->
    <section class="bg-primary-subtle py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="d-flex justify-content-center text-bg-primary-subtle">
                        <div class="col-12 col-xl-9">
                            <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg" width="245" height="80" alt="BootstrapBrain Logo">
                            <hr class="border-primary-subtle mb-4">
                            <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                            <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial intelligence.</p>
                            <!-- <div class="text-endx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                    <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="card border-0 rounded-4 bg-secondary-subtle">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <h2 class="h3">Registration</h2>
                                        <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                                    </div>
                                </div>
                            </div>
                            <form method="post">
                                <div class="row gy-3 overflow-hidden">
                                    <!-- First Name -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?=$firstName ?>" required>
                                            <label for="firstName" class="form-label">First Name</label>
                                        </div>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?=$lastName?>" required>
                                            <label for="lastName" class="form-label">Last Name</label>
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?=$email?>" required/>
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?=$password?>" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    
                                    <!-- Confirm Password -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" value="<?=$confirmPassword?>" required>
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        </div>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" name="tel" id="tel" placeholder="Phone Number" value="<?=$tel?>" required>
                                            <label for="tel" class="form-label">Phone Number</label>
                                        </div>
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth" value="<?=$dob?>" required>
                                            <label for="dob" class="form-label">Date Of Birth</label>
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-12 d-flex gap-2">
                                        <label>Gender: </label>
                                        <div class=" mb-3">
                                            <input type="radio" class="form-check-input"  name="gender" id="gender" value="male"/>
                                            <label>Male</label>
                                        </div>
                                        <div class=" mb-3">
                                            <input type="radio" class="form-check-input" name="gender" id="gender" value="female"/>
                                            <label>Female</label>
                                        </div>
                                        <div class=" mb-3">
                                            <input type="radio"  class="form-check-input" name="gender" id="gender" value="others"/>
                                            <label>Brian</label>
                                        </div>
                                    </div>

                                    <!-- Role -->
                                    <div class="col-12 d-flex gap-2">
                                        <label>Role: </label>
                                        <div class=" mb-3">
                                            <input type="radio" class="form-check-input" name="role" id="role" value="user"/>
                                            <label>User</label>
                                        </div>
                                        <div class=" mb-3">
                                            <input type="radio" class="form-check-input" name="role" id="role" value="vendor"/>
                                            <label>Vendor</label>
                                        </div>
                                    </div>

                                    <!-- Terms & Conditions -->
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                                            <label class="form-check-label text-secondary" for="iAgree">
                                                I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg" type="submit">Sign up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                                        <p class="m-0 text-secondary text-center">Already have an account? <a href="#!" class="link-primary text-decoration-none">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Adding Footer -->
<?php
require_once("assets/footer.php");
?>