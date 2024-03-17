<?php

include("config.php");

if (isset($_POST['register'])) :

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (mysqli_query($conn, "INSERT into users(name,username,email,password,token) VALUES('$name','$username','$email','$password','$username')")) {

        $message = "Registered successfully!";

        header("Refresh: 2; URL=recruiter-login.php");
    } else {
        $message = "Something went wrong!";
    }

endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="container">
        <h1>Registration Form</h1>
        <p><?php if (isset($message)) {
                echo $message;
            } ?></p>
        <form id="registrationForm" action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>

    <script src="register.js"></script>

</body>

</html>