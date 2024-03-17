<?php

include("config.php");

if (isset($_POST['add_schedule'])) :
    $user_id = $user['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];


    if (mysqli_query($conn, "INSERT into schedule_interview(user_id,date,time) VALUES('$user_id','$date','$time')")) {
        $message = "Your meeting has been scheduled. Please ensure your presence on time. ";
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
    <title>Program Assignment</title>
    <link rel="stylesheet" href="calender.css">
</head>

<body>

    <div class="container">
        <h1>Schedule</h1>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div id="programModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Assign Task</h2>

                <form id="programForm">
                    <div class="form-group">
                        <label for="programName">task :</label>
                        <input type="text" id="programName" required>
                    </div>
                    <button type="submit">Assign Task</button>
                </form>

            </div>
        </div>
        <!-- Interview scheduling form -->
        <form method="post" action="">
            <h3>Schedule Interview</h3>
            <p><?php if (isset($message)) {
                    echo $message;
                } ?></p>
            <label for="interviewDate">Interview Date:</label>
            <input name="date" type="date" id="interviewDate" required><br>
            <label for="interviewTime">Interview Time:</label>
            <input name="time" type="time" id="interviewTime" required><br>
            <button type="submit" name="add_schedule">Schedule Interview</button>
        </form>

    </div>
    </div>

    <script src="calender.js"></script>

</body>

</html>