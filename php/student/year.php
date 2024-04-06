<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../../style.css";
    $shortcutIconLink = "../../images/";
    include('../shared/link.php');
    ?>
    <title>Quezon City University - Enrollment</title>
    <style>
        hr.divider {
            width: 100%;
        }

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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 34%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr class="divider">
            <form action="./program.php" method="post">
                <div style="width: 50%; text-align: center;" class="mx-auto">
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div style="width: 45%;">
                            <p class="fw-bold">YEAR LEVEL</p>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div style="width: 45%;">
                            <p class="fw-bold">TERM</p>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <p class="fw-bold">ACADEMIC YEAR</p>
                    <div class="d-flex flex-row justify-content-between mb-3 align-items-center">
                        <div style="width: 45%;">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <span class="fw-bold">TO</span>
                        <div style="width: 45%;">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <p>Are you applying as</p>
                    <div class="input-group justify-content-center gap-1">
                        <input type="radio" name="applying_as" id="REGULAR">
                        <label for="REGULAR" class="fw-bold me-4" style="width: 10%;">REGULAR</label>
                    </div>
                    <div class="input-group justify-content-center gap-1">
                        <input type="radio" name="applying_as" id="TRANSFEREE">
                        <label for="TRANSFEREE" class="fw-bold me-4" style="width: 10%;">TRANSFEREE</label>
                    </div>
                    <div class="input-group justify-content-center gap-1">
                        <input type="radio" name="applying_as" id="SHIFTEE">
                        <label for="SHIFTEE" class="fw-bold me-4" style="width: 10%;">SHIFTEE</label>
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