<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'freeawoof');

// Check connection

// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// } else {
//     echo "connected succesfully" . "<br/>";
// }


//assigning variables to the ids from the HTML Form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($db, $sql)) {
  echo "Form Submitted Successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
};

mysqli_close($db);

?>