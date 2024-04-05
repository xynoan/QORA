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
    <title>Quezon City University - Register</title>
    <style>
        hr.divider {
            width: 100%;
        }

        #main-container {
            margin-top: 170px;
            margin-bottom: 50px;
        }

        .step1 {
            width: 20%;
        }

        .course {
            width: 40%;
        }

        .back_to_homepage {
            background-color: var(--main-color);
        }

        .back_to_homepage:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        .yay {
            border: 5px solid var(--main-color);
            width: 70%;
        }

        .next {
            background-color: var(--main-color);
            width: 15%;
        }

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        #content-form {
            border: 2px solid var(--main-color);
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $homePagePath = "../";
    $imageLink = "../../images/";
    $loginPath = "../login/";
    include('../shared/header.php');
    ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3 d-flex justify-content-center flex-column align-items-center gap-4">
            <div class="yay p-4 rounded-5 d-flex justify-content-center text-center">
                <div style="width: 50%;">
                    <i class="fa-regular fa-circle-check text-success" style="font-size: 75px;"></i>
                    <h1 class="text-success">Thank you!</h1>
                    <h2>You are successfully registered. Good luck on your application.</h2>
                </div>
            </div>
            <p class="mb-0 mt-2"><a href="../index.php" class="text-decoration-none back_to_homepage text-white py-3 px-5 rounded-4">Back to Homepage</a></p>
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