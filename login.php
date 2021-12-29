<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--Main Css File, Bootstrap and Fontawesome Files-->
    <link href="styles/css/login.css" rel="stylesheet">
    <link href="styles/bootstrap-5.0.0-beta1-dist/cssb/bootstrap.min.css" rel="stylesheet">
    <link href="styles/fontawesome/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-muse">

        <div class="muse-login">

            <div class="backhome">

                <a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>

            </div>

            <form action="db.php" class="loginform" method="post">

                <span class="login-title">
                    Login
                </span>
                <?php include('errors.php'); ?>
                <div class="mb-2 validate-input" data-validate="Enter your username">

                    <input class="form-control" type="text" name="username" placeholder="username">
                    <span class="focus-muse10"></span>

                </div>

                <div class="mb-2 validate-input" data-validate="Enter password">

                    <input class="form-control" type="password" name="password" placeholder="password">
                    <span class="focus-muse10"></span>

                </div>



                <div class="container-muse10-button">

                    <button class="muse10-btn" type="submit" name="login_user">Login</button>

                </div>



            </form>

            <div class="forgotpassword">

                <span>Forgot Password <a class="click2" href="#">Click Here</a></span>

            </div>
            <div class="text-center">

                <a href="signup.php" class="text1"> Sign Up </a>

            </div>

        </div>

    </div>
    <!-- Template Main JS File -->
    <script src="styles/js/main.js"></script>

</body>

</html>