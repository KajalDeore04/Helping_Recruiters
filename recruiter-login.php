<?php

include("config.php");

if (isset($_POST['verify'])) :

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * from users WHERE username='$username'");

    if (mysqli_num_rows($sql) < 1) :
        $message = "No user found!";
    endif;

    $db_user = mysqli_fetch_array($sql);

    if ($password == $db_user['password']) {

        $cookie_name = "logintoken";
        $cookie_value = $db_user['token'];

        $expiry_time = time() + (30 * 60);

        setcookie($cookie_name, $cookie_value, $expiry_time, "/");

        $message = "Login successful! Please wait while we redirect you.";

        header("Refresh: 2; URL=recruiter-dashboard.php");
    } else {
        $message = "Wrong Password!";
    }

endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Login</title>
    <link rel="stylesheet" href="recruiter-login.css">
</head>

<body>

    <div class="container">
        <h1>Recruiter Login</h1>
        <p><?php if (isset($message)) {
                echo $message;
            } ?></p>
        <form action="" autocomplete="off" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="verify">Login</button>
        </form>
    </div>

</body>

</html>