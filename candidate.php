<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="candidate.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <!-- Search Bar -->
            <div class="row justify-content-center mt-3">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="input-group cute-search-bar">
                        <input
                            type="text"
                            class="form-control"
                            id="searchInput"
                            placeholder="Search candidates"
                            aria-label="Search candidates"
                            aria-describedby="search-btn"
                        />
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="search-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Candidate Cards -->
            <div class="row justify-content-center mt-5" id="candidateContainer">
            
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="candidate.js"></script>
</body>
</html>
