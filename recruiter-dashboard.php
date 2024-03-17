<?php 
include("config.php") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-12 d-flex align-items-start justify-content-center">
                <div class="mt-5">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="job-listing.php"><button class="nav-link active cutome-btn btn-link" aria-selected="true">
                                <i class="fas fa-list"></i>

                                Job Listing
                            </button></a>
                        <a href="candidate.php"><button class="nav-link cutome-btn btn-link" aria-selected="false">
                                <i class="fas fa-users"></i>
                                Applicants
                            </button></a>

                        <a href="calendar.php">
                            <button class="nav-link cutome-btn btn-link" aria-selected="false">
                                <i class="fas fa-calendar-alt"></i>
                                Scheduling
                            </button>
                        </a>

                        <a href="interview.php">
                            <button class="nav-link cutome-btn btn-link" aria-selected="false">
                                <i class="fas fa-clipboard"></i>
                                Exam Portal
                            </button>
                        </a>

                        <a href="feedback.php"><button class="nav-link cutome-btn btn-link" aria-selected="false">
                            <i class="fas fa-chart-bar"></i>
                            Report
                        </button></a>
                        <button class="nav-link mt-5 cutome-btn btn-link" aria-selected="false">
                            <i class="fas fa-cog"></i>
                            Settings
                        </button>
                        <a href="logout.php" class="nav-link cutome-btn btn-link" aria-selected="false">
                            <i class="fas fa-sign-out-alt"></i>
                            Log Out
</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 Second-col-bg p-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Dashboard</h1>
                        <p>Information of your current schedules and hiring</p>
                    </div>
                    <a href="job-listing.php"><button class="cutome-btn "><i class="fas fa-list"></i> Job
                            Posting</button></a>
                </div>

                <div class="container-fluid">
                    <div class="row justify-content-between ">
                        <div class="col-lg-6 col-second-border p-3 ">
                            <div class="  bg-white p-3 task-box">
                                <h2 class="title">Tasks</h2>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">Candidate 1 report</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox2">
                                    <label class="form-check-label" for="checkbox2">Task 2</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox3">
                                    <label class="form-check-label" for="checkbox3">Task 3</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox4">
                                    <label class="form-check-label" for="checkbox4">Task 4</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox5">
                                    <label class="form-check-label" for="checkbox5">Task 5</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox6">
                                    <label class="form-check-label" for="checkbox6">Task 6</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkbox7">
                                    <label class="form-check-label" for="checkbox7">Task 7</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12  col-second-border ">
                            <div class="calendar-container bg-white p-4">
                                <h2 class="title">Calender</h2>

                                <header class="calendar-header">

                                    <p class="calendar-current-date"></p>
                                    <div class="calendar-navigation">
                                        <span id="calendar-prev" class="material-symbols-rounded">
                                            chevron_left
                                        </span>
                                        <span id="calendar-next" class="material-symbols-rounded">
                                            chevron_right
                                        </span>
                                    </div>
                                </header>

                                <div class="calendar-body">
                                    <ul class="calendar-weekdays">
                                        <li>Sun</li>
                                        <li>Mon</li>
                                        <li>Tue</li>
                                        <li>Wed</li>
                                        <li>Thu</li>
                                        <li>Fri</li>
                                        <li>Sat</li>
                                    </ul>
                                    <a href="democalendar.php"><ul class="calendar-dates"></ul></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row mt-4 bg-white col-second-border">
                    <div class="col-12 mt-4">
                        <h2 class="title">Candiadate</h2>
                        <div class="row mt-5">
                            <div class="col-lg-12 col-sm-8">

                                <div class="card mb-4">
                                    <h4 class="card-header text-center">Candidate 1</h4>
                                    <div class="card-body">
                                        <p class="card-text"><strong>Position : </strong>Manager</p>
                                        <p class="card-text"><strong>Employment Type : </strong>Full Time</p>
                                        <p class="card-text"><strong>Experience : </strong>Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <p class="card-text"><strong>Contact : </strong>1234567890.</p>
                                        <a href="applicant1.php" class="btn btn-primary">More About</a>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <h4 class="card-header text-center">Candidate 2</h4>
                                    <div class="card-body">
                                        <p class="card-text"><strong>Position : </strong>Manager</p>
                                        <p class="card-text"><strong>Employment Type : </strong>Full Time</p>
                                        <p class="card-text"><strong>Experience : </strong>Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <p class="card-text"><strong>Contact : </strong>1234567890.</p>
                                        <a href="applicant1.php" class="btn btn-primary">More About</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-sm-12 Second-col-bg p-5 ">
                <div class="bg-white col-second-border p-3">
                    <h4 class="p-3">Feedbacks</h4>
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-user "></i>Rahul</h5>
                            <p class="card-text">Your resume demonstrates strong qualifications and relevant experience
                                for the position. However, we encourage you to tailor your cover letter to better
                                highlight how your skills align with the specific needs of our company.
                            </p>
                        </div>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-user "></i>Tejas kumar</h5>
                            <p class="card-text">Your interview performance was impressive, showcasing a deep
                                understanding of the industry and enthusiasm for the role. We'd like to see you expand
                                on your examples during the next stage to provide more detail on your problem-solving
                                abilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        manipulate();
    });
</script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>