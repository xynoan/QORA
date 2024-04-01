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
        <div id="content-form" class="p-5 mt-3">
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%"></div>
            </div>
            <h1 class="mt-3">Basic Information</h1>
            <hr class="divider">
            <form action="./personal_info.php" method="post">
                <div class="d-flex gap-5">
                    <div class="d-flex flex-column step1">
                        <label for="date" class="fw-bold">Application Date</label>
                        <input type="date" name="" id="date">
                    </div>
                    <div class="d-flex flex-column step1">
                        <label for="lrn" class="fw-bold">LRN</label>
                        <input type="number" name="" id="lrn">
                    </div>
                    <div class="d-flex flex-column step1">
                        <label for="studentNumber" class="fw-bold">Student Number</label>
                        <input type="number" name="" id="studentNumber" disabled>
                    </div>
                </div>
                <hr class="divider">
                <p class="fw-bold">Applying as (Choose appropriate answer)</p>
                <input type="checkbox" name="" id=""> Senior High School Graduate
                <div class="dropdown d-inline-block">
                    <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Track
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown d-inline-block">
                    <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Strand
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="input-group gap-1">
                    <input type="checkbox" name="" id="hsGraduate">
                    <label for="hsGraduate"> High School Graduate (Year 2015 and below)</label>
                </div>
                <input type="checkbox" name="" id=""> Transferee <br>
                <div class="input-group gap-1 align-items-baseline">
                    <p>Applying for Accreditation of Subjects? </p>
                    <div class="dropdown d-inline-block">
                        <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select One
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <input type="checkbox" name="" id=""> 2nd Degree Course Taker (Graduate of Bachelor’s Degree)
                <hr class="divider">
                <div class="d-flex gap-5">
                    <div>
                        <p class="fw-bold">Preferred Course</p>
                        <div class="row row-cols-2 courseWidth d-flex align-items-baseline">
                            <div class="col mb-4 choice">First Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                            <div class="col mb-4 choice">Second Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                            <div class="col mb-4 choice">Third Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                            <div class="col mb-4 choice">Currently Enrolled?</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                        </div>
                        <input type="text" name="" id="" placeholder="Name Of School" class="form-control">
                    </div>
                    <div>
                        <p class="fw-bold">Preferred Campus</p>
                        <div class="row row-cols-2 courseWidth d-flex align-items-baseline">
                            <div class="col mb-4">First Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                            <div class="col mb-4">Second Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                            <div class="col mb-4">Third Choice</div>
                            <select class="form-select d-inline-block course" onchange="nextPage()">
                                <option selected>Select One</option>
                                <option value="abm">ABM</option>
                                <option value="humss">HUMSS</option>
                                <option value="STEM">STEM</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <p class="text-end mt-4 mb-0"><button class="btn next text-white" type="submit">Next <i class="fa-solid fa-chevron-right"></i></button></p>
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