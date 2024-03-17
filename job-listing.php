<?php

include("config.php");

if (isset($_POST['add'])) :

    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $salary = $_POST['salary'];
    $joining_date = $_POST['joining_date'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    $insert_query = "INSERT INTO open_jobs (title, description, type, salary, joining_date, experience, skills) VALUES ('$title', '$description', '$type', '$salary', '$joining_date', '$experience', '$skills')";

    if (mysqli_query($conn, $insert_query)) {
        $message = "Posted  successfully!";
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
    <title>Job Listing</title>
    <link rel="stylesheet" href="job-listing.css">
</head>

<body>

    <div class="container">
        <h1>Create Job Post</h1>
        <p><?php if (isset($message)) {
                echo $message;
            } ?></p>


        <form method="post" action="">
            <div class="form-group">
                <label for="jobTitle">Job Title:</label>
                <input type="text" name="title" id="jobTitle" required>
            </div>

            <div class="form-group">
                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="jobType">Job Type:</label>
                <select id="jobType" name="type" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Internship">Internship</option>
                </select>
            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" id="salary">
            </div>

            <div class="form-group">
                <label for="joiningDate">Joining Date Required:</label>
                <input type="date" name="joining_date" id="joiningDate">
            </div>

            <div class="form-group">
                <label for="experience">Experience Required:</label>
                <input type="text" name="experience" id="experience">
            </div>

            <div class="form-group">
                <label for="skills">Skills Required:</label>
                <input type="text" name="skills" id="skills">
            </div>

            <button type="submit" name="add">Create Job Post</button>
        </form>
    </div>

    <script src="job-listing.js"></script>

</body>

</html>