<?php 

$conn = mysqli_connect("localhost", "root", "", "job_portal") ;


if(isset($_COOKIE['logintoken'])) {
    $token = $_COOKIE['logintoken'] ;
    $sql = mysqli_query($conn,"SELECT * from users WHERE token='$token'") ;
    $user = mysqli_fetch_array($sql) ;
}

/*$sql = "SELECT * FROM schedule_interview";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) { ?>

       <h1> <?php echo $row['date'] ; ?> </h1>

   <?php }
} else {
    echo "0 results";
}*/