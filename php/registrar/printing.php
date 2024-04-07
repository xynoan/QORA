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
    <title>Quezon City University - Registrar</title>
    <style>
        div.active {
            visibility: visible !important;
            opacity: 1 !important;
        }

        i.operation {
            font-size: 15px;
            margin-right: 5px;
        }

        span.sub-span {
            font-size: 13px;
            border: 2px solid grey;
            width: 80%;
        }

        button.filter,
        select {
            margin: 0 5px;
            background-color: white;
            border: 2px solid var(--main-color) !important;
            color: var(--main-color) !important;
            width: 15%;
        }

        button.filter:hover {
            background-color: var(--main-color);
            color: white !important;
            transition: all 0.5s;
        }

        hr.divider {
            width: 100%;
        }

        #main-container {
            margin-top: 160px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
        }

        .graduated {
            background-color: grey !important;
            color: white !important;
            width: 75px;
            margin-left: 20px;
            margin: 0;
        }

        .white-on-hover:hover {
            background-color: white;
            color: black;
            cursor: pointer;
        }

        .underline-on-hover:hover {
            text-decoration: underline !important;
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
        <h1 class="text-center fs-2" style="color: var(--main-color);">Enrolled Schedule for AY [date]/[ ] Sem</h1>
        <div class="border border-black border-2">
            <div class="d-flex justify-content-between p-3">
                <span>Roxas, Mark Joseph - StudNo - IT.pdf </span>
                <div class="zoom me-5">
                    <i class="fa-solid fa-minus"></i>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div>
                <i class="fa-solid fa-print"></i> <span>Print</span>
                <i class="fa-solid fa-envelope"></i> <span>Email</span>
                </div>
            </div>
            <div style="background-color: grey;" class="p-3">
                <img src="../../images/Reg-Form.png" alt="regform" height="500px;" class="d-block mx-auto my-auto">
                <p class="text-end"><a href="./index.php" style="background-color: var(--main-color);" class="text-white text-decoration-none black-on-hover p-2 rounded-3">Next Student</a></p>
            </div>
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