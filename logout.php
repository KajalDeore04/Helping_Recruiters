<?php 


setcookie("logintoken", "", time() - 3600);

header("location:/index.php") ;