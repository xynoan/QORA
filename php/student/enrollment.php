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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 17%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr class="divider">
            <form action="./year.php" method="post" class="d-flex flex-column align-items-center justify-content-center gap-3">
                <div id="image-container" class="square border border-3 border-grey d-flex flex-column justify-content-center align-items-center">
                    <input type="file" id="actual-btn" hidden />
                    <label for="actual-btn"><i class="fa-solid fa-cloud-arrow-up" style="opacity: 0.5; font-size: 100px;"></i></label>
                    <span style="color: grey; width: 150px;" class="text-center mt-2"><b>Click to upload</b> or
                        drag and drop</span>
                </div>
                <a href="#" class="text-black"><label for="actual-btn" class="text-decoration-underline" style="cursor: pointer;">Change</label></a>
                <button type="submit" class="btn text-white rounded-4" id="submitImage">SUBMIT</button>
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