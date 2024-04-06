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
                    <div>
                        <h1 class="fs-2 d-inline-block">Students</h1>
                        <button class="filter">All</button>
                        <button class="filter">Active</button>
                        <select class="form-select d-inline-block" aria-label="Default select example" style="width: 20%;">
                            <option selected>Archive</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <a href="#" class="text-decoration-none text-white p-2 ms-2" style="background-color: var(--main-color);"><i class="fa-solid fa-filter text-white"></i>Filters</a>
                    </div>
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
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;"><a href="#" class="text-decoration-none text-black">View Profile</a></div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">Mark Joseph Roxas</div>
                            <div class="col mb-3" style="font-size: 10px;">roxas.markjoseph@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Active</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">Nathaniel Carlo Morva</div>
                            <div class="col mb-3" style="font-size: 10px;">morva.nathanielcarlo@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Active</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">Blake Justin Bangcaya</div>
                            <div class="col mb-3" style="font-size: 10px;">bangcaya.blakejustin@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Active</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">Toni Fowler</div>
                            <div class="col mb-3" style="font-size: 10px;">fowler.toni@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Dropped</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">John Doe</div>
                            <div class="col mb-3" style="font-size: 10px;">doe.john@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Graduated</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">John Doe</div>
                            <div class="col mb-3" style="font-size: 10px;">doe.john@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Graduated</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">John Doe</div>
                            <div class="col mb-3" style="font-size: 10px;">doe.john@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Graduated</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                            <div class="col mb-3" style="font-size: 10px;">Photo</div>
                            <div class="col mb-3" style="font-size: 10px;">John Doe</div>
                            <div class="col mb-3" style="font-size: 10px;">doe.john@gmail.com</div>
                            <div class="col mb-3" style="font-size: 10px;">Graduated</div>
                            <div class="col mb-3" style="font-size: 10px;"><i class="fa-solid fa-user-pen operation"></i><i class="operation fa-regular fa-trash-can"></i></div>
                            <div class="col mb-3 underline-on-hover" style="font-size: 10px;">View Profile</div>
                        </div>
                    </div>
                </div>
                <div class="second-half" style="width: 35%;">
                    <input type="text" name="" placeholder="Reference ID" class="form-control mb-3" style="width: 70%;">
                    <div class="border border-black rounded-3 p-5">
                        <div class="mb-4 d-flex flex-column justify-content-center align-items-center text-center">
                            <img class="border border-black border-2" height="150px" src="https://i.pinimg.com/564x/fc/d8/63/fcd863cae619ccaa27ae4c69d97d901a.jpg" alt="">
                            <span class="name fw-bold fs-5 mb-2">Mark Joseph Roxas</span>
                            <span class="year sub-span rounded-2 mb-2">REGULAR 3RD YR - 1ST SEM</span>
                            <span class="status text-success sub-span rounded-2 mb-2">CLEARED</span>
                            <span class="gwa sub-span rounded-2">GWA: 1.64</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="./view_profile.php" class="underline-on-hover text-decoration-none text-black border border-grey border-2 p-1 rounded-2">View Profile</a>
                            <a href="#" class="underline-on-hover text-decoration-none text-black border border-grey border-2 p-1 rounded-2">Enlist Student</a>
                        </div>
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