<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $reasons = $_POST['reasons'];
    $privacyPolicy = isset($_POST['privacy-policy']) ? 'Yes' : 'No';

    $to = "admin@gmail.com"; 
    $subject = "Feedback Submission";
    $message = "Rating: $rating\nReasons: $reasons\nPrivacy Policy Accepted: $privacyPolicy";

    if (mail($to, $subject, $message)) {
        echo "Feedback sent successfully. Thank you!";
    } else {
        echo "Failed to send feedback. Please try again later.";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
<main>
    <div class="card">
        <h3>Report</h3>
        <form id="feedbackForm" action="#">
            <div class="form-group">
                <label for="">Interview Reports</label>

                <div>
                    <label>
                        <input type="radio" name="rating" required />
                        <img src="terrible.svg" alt="Terrible" />
                        <span>Terrible</span>
                    </label>
                    <label>
                <input type="radio" name="rating" />
                <img src="bad.svg" alt="Bad" />
                <span>Bad</span>
              </label>
              <label>
                <input type="radio" name="rating" />
                <img src="okay.svg" alt="Okay" />
                <span>Okay</span>
              </label>
              <label>
                <input type="radio" name="rating" />
                <img src="good.svg" alt="Good" />
                <span>Good</span>
              </label>
              <label>
                <input type="radio" name="rating" />
                <img src="amazing.svg" alt="Amazing" />
                <span>Amazing</span>
              </label>
                    
                </div>
            </div>

            <div class="form-group">
                <label for="reasons">Details</label>
                <textarea name="reasons" id="reasons" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="privacy-policy" required /> I may be contacted about this feedback.
                    <a href="/">Privacy Policy</a>
                </label>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
</main>

<script src="feedback.js"></script>
</body>
</html>
