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
    <title>Quezon City University - Registrar</title>
    <style>
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
                <i class="fa-solid fa-magnifying-glass mt-3 ms-3 me-3" style="font-size: 25px; color: grey;"></i><input type="search" name="" placeholder="Search by Reference ID or Student Number" class="form-control">
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
                    <h1 class="fs-2 d-inline-block">Students</h1>
                    <button>All</button>
                    <button>Active</button>
                    <select class="form-select d-inline-block" aria-label="Default select example" style="width: 15%;">
                        <option selected>Archive</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-filter"></i>Filters</a>
                    <div class="container text-center mt-3">
                        <div class="row row-cols-6">
                            <div class="col mb-3">Photo</div>
                            <div class="col mb-3">Student Name</div>
                            <div class="col mb-3">Email</div>
                            <div class="col mb-3">Status</div>
                            <div class="col mb-3">Operation</div>
                            <div class="col mb-3">Action</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">John Doe</div>
                            <div class="col mb-3" style="font-size: 10px;">doe.john@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Graduated</div>
                            <div class="col mb-3" style="font-size: 10px;">Operation</div>
                            <div class="col mb-3" style="font-size: 10px;">View Profile</div>
                        </div>
                    </div>
                </div>
                <div class="second-half" style="width: 35%;">
                    <input type="text" name="" placeholder="Reference ID" class="form-control mb-3" style="width: 70%;">
                    <div class="border border-black rounded-3 p-5">
                        <img class="border border-black border-2" height="170px" src="https://i.pinimg.com/564x/fc/d8/63/fcd863cae619ccaa27ae4c69d97d901a.jpg" alt="">
                        <span class="name">Mark Joseph Roxas</span>
                        <span class="year">REGULAR 3RD YR - 1ST SEM</span>
                        <span class="status text-success">CLEARED</span>
                        <span class="gwa">GWA: 1.64</span>
                        <a href="#">View Profile</a>
                        <a href="#">Enlist Student</a>
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