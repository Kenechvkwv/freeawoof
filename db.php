<?php

    session_start();



    // initializing variables
    $email    = "";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'freeawoof');

    // Check connection

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } else {
        echo "connected succesfully" . "<br/>";
    }

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $email = mysqli_real_escape_string($db, $_POST['username']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $confirm = mysqli_real_escape_string($db, $_POST['confirm']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }
        if (empty($confirm)) {
            array_push($errors, "You have to agree to all Terms of Service");
        }

        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1); //encrypt the password before saving in the database

            $query = "INSERT INTO users (username, phone, gender, password, confirm) 
  			  VALUES('$email','$phone', '$gender', '$password', '$confirm')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: profile.php');
        }
    }



    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username='$email' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: profile.php');
            } else {
                array_push($errors, "Wrong email/password combination");
            }
        }
    }

    

    ?>