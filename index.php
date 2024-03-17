<?php
if (isset($_COOKIE['logintoken'])) {
  header("location:/recruiter-dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Selection</title>

  <link rel="stylesheet" href="index.css">
  <script src="script.js" defer></script>
</head>


<body>

  <div class="container">
    <h1>Recruiting made easy.........</h1>
    

    <button onclick="redirectToRecruiterLogin()">Recruiter</button>
    
    <br>
    <br>
    <form action="register.php">
      <button type="submit">Register</button>
    </form>

  </div>




</body>

</html>