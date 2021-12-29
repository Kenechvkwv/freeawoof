<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sign Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--Main Css File, Bootstrap and Fontawesome File -->
    <link href="styles/css/signup.css" rel="stylesheet">
    <link href="styles/bootstrap-5.0.0-beta1-dist/cssb/bootstrap.min.css" rel="stylesheet">
    <link href="styles/fontawesome/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-main">

        <div class="signup-content">

            <div class="backhome">

                <a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>

            </div>

            <form action="db.php" class="signup-form" method="post">
                <?php include('errors.php'); ?>

                <h2 class="signup-title">Create Account</h2>

                <div class="mb-2 validate-input">

                    <input type="text" class="form-control" name="username" placeholder="username">
                    <span class="focus-muse10"></span>

                </div>

                <div class="mb-2 validate-input">

                    <input type="tel" class="form-control" name="phone" placeholder="phone number">
                    <span class="focus-muse10"></span>

                </div>

                <div class="mb-2">

                    <label for="gender" class="gender">

                        Gender:

                        <input class="genderin" type="radio" name="gender" value="male">Male
                        <input class="genderin" type="radio" name="gender" value="female">Female
                        <input class="genderin" type="radio" name="gender" value="other">Other

                    </label>

                </div>

                <div class="mb-2 validate-input">

                    <input type="password" class="form-control" name="password_1" placeholder="password">
                    <span class="focus-muse10"></span>

                </div>

                <div class="mb-2 validate-input">

                    <input type="password" class="form-control" name="password_2" placeholder="confirm your password">
                    <span class="focus-muse10"></span>

                </div>

                <div class="form-cliq13">

                    <input type="checkbox" name="confirm" id="agree-terms" class="agree-term">

                    <label for="confirm" class="agree-term">

                        <span>

                            <span>I agree to all statement in <a href="#" class="terms2">Terms of service</a></span>

                        </span>

                    </label>

                </div>

                <div class="form-cliq-button">

                    <button class="muse-btn" name="reg_user" type="submit"> SIGN UP</button>

                </div>



            </form>
            <div class="text-center">

                <p class="logintext">Have already an account? <a class="login1" href="login.php">Login Here</a></p>

            </div>

        </div>

    </div>

</body>

</html>