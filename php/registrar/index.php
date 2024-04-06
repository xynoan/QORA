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
                        <a id="filter-anchor" href="#" onclick="toggleFilter()" class="black-on-hover text-decoration-none text-white p-2 ms-2" style="background-color: var(--main-color);"><i class="fa-solid fa-filter text-white me-2"></i>Filters</a>
                        <div id="filter-menu" class="p-3 border border-black text-white rounded-4" style="position: absolute; width: 15%; background-color: var(--main-color); left: 680px; visibility: hidden; opacity: 0;">
                            <span onclick="toggleAcademicYear()" class="white-on-hover">Academic Year ></span>
                            <span onclick="toggleCollegeProgram()" class="white-on-hover">College Program ></span>
                            <span onclick="toggleSection()" class="white-on-hover">Yr. Level/Section ></span>
                            <span onclick="toggleStatus()" class="white-on-hover">Student Status ></span>
                            <span class="white-on-hover">Student Number</span>
                        </div>
                        <div class="border border-black text-white" id="academicYear" style="position: absolute; background-color: var(--main-color); width: 10%; left: 880px; visibility: hidden; opacity: 0;">
                            <p class="text-center">Set Year</p>
                            <div class="input-group">
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                -
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="border border-black text-white" id="collegeProgram" style="position: absolute; background-color: var(--main-color); left: 880px; top: 400px; visibility: hidden; opacity: 0;">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    College of Business and Accountancy
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    College of Education
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    College of Engineering
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    College of Computer Studies
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Bachelor of Science in Information and Technology</a></li>
                                    <li><a class="dropdown-item" href="#">Bachelor of Science in Information Systems</a></li>
                                    <li><a class="dropdown-item" href="#">Bachelor of Science in Computer Science</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="border border-black text-white p-2" id="section" style="position: absolute; background-color: var(--main-color); left: 880px; top: 430px; visibility: hidden; opacity: 0;">
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column">
                                    <p class="text-center m-0" style="opacity: 0.5;">YEAR LEVEL</p>
                                    <div class="input-group gap-1">
                                        <input type="radio" name="year" id="1st"> <label for="1st">1st Year</label>
                                    </div>
                                    <div class="input-group gap-1"><input type="radio" name="year" id="2nd"> <label for="2nd">2nd Year</label></div>
                                    <div class="input-group gap-1"><input type="radio" name="year" id="3rd"> <label for="3rd">3rd Year</label></div>
                                    <div class="input-group gap-1"><input type="radio" name="year" id="4th"> <label for="4th">4th Year</label></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-center m-0" style="opacity: 0.5;">SEMESTER</p>
                                    <div class="input-group gap-1">
                                        <input type="radio" name="sem" id="1stSem"> <label for="1stSem">1ST SEM</label>
                                    </div>
                                    <div class="input-group gap-1"><input type="radio" name="sem" id="2ndSem"> <label for="2ndSem">2ND SEM</label></div>
                                </div>
                            </div>
                            <div>
                                <p style="opacity: 0.5;" class="m-0">SECTION</p>
                                <div class="input-group gap-2">
                                    <input type="radio" name="section" id="A"> <label for="A">A</label>
                                    <input type="radio" name="section" id="D"> <label for="D">D</label>
                                    <input type="radio" name="section" id="G"> <label for="G">G</label>
                                    <input type="radio" name="section" id="J"> <label for="J">J</label>
                                </div>
                                <div class="input-group gap-2">
                                    <input type="radio" name="section" id="B"> <label for="B">B</label>
                                    <input type="radio" name="section" id="E"> <label for="E">E</label>
                                    <input type="radio" name="section" id="H"> <label for="H">H</label>
                                    <input type="radio" name="section" id="K"> <label for="K">K</label>
                                </div>
                                <div class="input-group gap-2">
                                    <input type="radio" name="section" id="C"> <label for="C">C</label>
                                    <input type="radio" name="section" id="F"> <label for="F">F</label>
                                    <input type="radio" name="section" id="I"> <label for="I">I</label>
                                    <input type="radio" name="section" id="L"> <label for="L">L</label>
                                </div>
                            </div>
                        </div>
                        <div class="border border-black text-white p-2" id="status" style="position: absolute; background-color: var(--main-color); left: 880px; top: 450px; visibility: hidden; opacity: 0;">
                            <div class="d-flex flex-column">
                                <p class="m-0" style="opacity: 0.5;">ACTIVE</p>
                                <div class="input-group gap-1">
                                    <input type="radio" name="active" id="Regular"> <label for="Regular">Regular</label>
                                </div>
                                <div class="input-group gap-1"><input type="radio" name="active" id="Irregular"> <label for="Irregular">Irregular</label></div>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="m-0" style="opacity: 0.5;">ARCHIVE</p>
                                <div class="input-group gap-1">
                                    <input type="radio" name="archive" id="Graduated"> <label for="Graduated">Graduated</label>
                                </div>
                                <div class="input-group gap-1"><input type="radio" name="archive" id="Dropped"> <label for="Dropped">Dropped</label></div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Operation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Photo</td>
                                    <td>John Doe</td>
                                    <td>doe.john@gmail.com
                                    </td>
                                    <td><span class="graduated p-1">Graduated</span></td>
                                    <td><i class="fa-solid fa-user-pen operation" style="cursor: pointer;"></i><i class="operation fa-regular fa-trash-can" style="cursor: pointer;"></i></td>
                                    <td><a href="#" class="text-decoration-none text-black underline-on-hover">View Profile</a></td>
                                </tr>
                            </tbody>
                        </table>
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