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
        <div class="d-flex gap-5">
            <div class="input-group border border-black p-3 rounded-4">
                <i class="fa-solid fa-magnifying-glass mt-3 ms-3 me-3" style="font-size: 25px; color: grey;"></i><input type="search" name="" placeholder="241CS-IT30001" class="form-control">
                <button id="submit" type="submit" style="background-color: var(--main-color);" class="text-white rounded-end-4 p-3">Search</button>
            </div>
            <div class="d-flex text-white rounded-4 p-3 align-items-center" style="width: 50%;background-color: var(--main-color);">
                <p class="fw-bold fs-3 m-0">2:30<span class="fw-normal" style="vertical-align: super; font-size: 13px;">45</span>PM</p>
                <div>
                    <p class="m-0 ms-3">Work Time</p>
                    <p style="font-size: 10px;" class="m-0 ms-3">Saturday, March 2, 2024 (GMT+8) <br>
                        Time in Manila, Metro Manila</p>
                </div>
            </div>
        </div>
        <div id="content-form" class="p-5 mt-3">
            <?php include('../shared/logoutModal.php') ?>
            <div class="d-flex gap-5">
                <div class="first-half" style="width: 65%;">
                    <div>
                        <div style="background-color: var(--main-color);" class="me-4 rounded-4 text-white d-inline-block">
                            <div class="d-flex p-2 align-items-center gap-3">
                                <span class="fs-4 fw-bold">563</span>
                                <div><span>Pending <br>Students</span></div>
                            </div>
                        </div>
                        <div style="background-color: var(--secondary-color);" class="rounded-4 text-white d-inline-block">
                            <div class="d-flex p-2 align-items-center gap-3">
                                <span class="fs-4 fw-bold">43</span>
                                <div><span>Total <br>Students</span></div>
                            </div>
                        </div>
                        <div class="d-inline-block me-2">
                            <div class="d-flex flex-column align-items-center">
                                <a href="./addCourse.php" class="text-black"><i class="fa-solid fa-plus border border-black p-2 rounded-3 mainColorHover" style="display: inline-block; width: 32px; cursor: pointer;"></i></a>
                                <span style="font-size: 12px;">ADD COURSES</span>
                            </div>
                        </div>
                        <div class="d-inline-block me-2">
                            <div class="d-flex flex-column align-items-center">
                                <a href="./updateCourse.php" class="text-black"><i class="fa-regular fa-pen-to-square border border-black p-2 rounded-3 mainColorHover" style="display: inline-block; width: 32px; cursor: pointer;"></i></a>
                                <span style="font-size: 12px;">UPDATE COURSES</span>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <div class="d-flex flex-column align-items-center">
                                <i class="fa-regular fa-trash-can border border-black p-2 rounded-3 mainColorHover" style="display: inline-block; width: 32px; cursor: pointer;"></i>
                                <span style="font-size: 12px;">DELETE COURSES</span>
                            </div>
                        </div>
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Section-Subject</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Days</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SOCSCI2</td>
                                    <td>SBIT2D-Readings in the Philippines History</td>
                                    <td>3</td>
                                    <td>F</td>
                                    <td>11:00AM-2:00PM</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-end"><a href="./printing.php" class="text-decoration-none text-white p-2 rounded-3 black-on-hover" style="background-color: var(--main-color);">Proceed ></a></p>
                    </div>
                </div>
                <div class="second-half" style="width: 35%;">
                    <div class="border border-black rounded-3 p-5">
                        <div class="mb-4 d-flex flex-column justify-content-center align-items-center text-center">
                            <img class="border border-black border-2" height="150px" src="https://i.pinimg.com/564x/fc/d8/63/fcd863cae619ccaa27ae4c69d97d901a.jpg" alt="">
                            <span class="name fw-bold fs-5 mb-2">Mark Joseph Roxas</span>
                            <span class="year sub-span rounded-2 mb-2">REGULAR 3RD YR - 1ST SEM</span>
                            <span class="status text-success sub-span rounded-2 mb-2">CLEARED</span>
                            <span class="gwa sub-span rounded-2">GWA: 1.64</span>
                        </div>
                        <p class="text-center"><a href="./view_profile.php" class="underline-on-hover text-decoration-none text-black">View Full Information</a></p>
                    </div>
                </div>
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