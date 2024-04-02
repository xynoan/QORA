<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../../style.css";
    $shortcutIconLink = "../../images/logo-white.png";
    include('../shared/link.php');
    ?>
    <title>Quezon City University - Enrollment</title>
    <style>
        #main-container {
            margin-top: 170px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
        }

        .navbar-brand {
            width: 821px;
        }

        .square {
            height: 250px;
            width: 250px;
            border-radius: 5%;
        }

        .fa-cloud-arrow-up {
            cursor: pointer;
        }

        .fa-cloud-arrow-up:hover {
            opacity: 1 !important;
            transition: opacity 0.5s;
        }

        .next {
            background-color: var(--main-color);
            width: 15%;
        }

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        #submitImage {
            background-color: var(--main-color);
            width: 150px;
        }

        #submitImage:hover {
            background-color: black;
            transition: background-color 0.5s;
        }
    </style>
</head>

<body>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $homePagePath = "../";
    $imageLink = "../../images/";
    $loginPath = "../login/";
    include('../shared/account.php');
    ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3">
            <?php include('../shared/logoutModal.php') ?>
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 68%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr style="width: 100%;">
            <form action="./input_review.php" method="post">
                <div class="container text-center">
                    <div class="row row-cols-5">
                        <div class="col">
                            <p class="fw-bold">Subject/Courses</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">Remarks</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">No. of Units</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">Grade</p>
                        </div>
                        <div class="col"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><button type="button" class="btn btn-success">Add</button></div>
                    </div>
                </div>
                <div class="container text-center mt-4" style="width: 35%;">
                    <div class="row row-cols-2">
                        <div class="col mb-3">
                            <p class="fw-bold">Total No. of Units</p>
                        </div>
                        <div class="col"> <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="col">
                            <p class="fw-bold">GWA</p>
                        </div>
                        <div class="col"> <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn next text-white" id="previousButton" type="button"><i class="fa-solid fa-chevron-left"></i> Previous</button>
                    <button class="btn next text-white" type="submit">Next <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $loginPath = "../login/";
    include('../shared/footer.php');
    ?>
    <?php
    $scriptPath = "../../";
    include('../shared/script.php');
    ?>
</body>

</html>