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

        .next {
            background-color: var(--main-color);
            width: 15%;
        }

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr class="divider">
            <form action="../index.php" method="post">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center m-0">PADAYON! Mula sa Tahanan ng Husay at Talino, para sa Bayan...</p>
                    <hr style="width: 50%;">
                    <div style="width: 50%; border: 2px solid var(--main-color);" class="rounded-5 text-center mb-3">
                        <i class="fa-regular fa-circle-check mt-3 mb-2" style="font-size: 50px; color: var(--main-color);"></i>
                        <h3 class="text-success fw-bold fs-4">SUCCESS!</h3>
                        <p class="fw-bold m-0">Your Reference Number</p>
                        <h2 class="fw-bold fs-1 m-0">241CS-IT30001</h2>
                        <p class="text-success fw-bold mb-0">REGULAR</p>
                        <p>March 28, 2024 (8:00am -12:00pm)</p>
                    </div>
                    <p style="width: 70%;" class="text-center fw-bold">*Regular students are advised to proceed to the school for enrollment with their reference ID. The Registrar's office will facilitate any necessary modifications to the automated enrollment certificate as needed.</p>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn next text-white" id="previousButton" type="button"><i class="fa-solid fa-file-pdf"></i> Save as PDF</button>
                    <button class="btn next text-white" type="submit">Home <i class="fa-solid fa-chevron-right"></i></button>
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