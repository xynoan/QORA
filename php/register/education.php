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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
            </div>
            <h1 class="mt-3">Educational Attainment</h1>
            <hr class="divider">
            <form action="./family.php" method="post">
                <p class="fw-bold m-0">College (Leave it blank if you have not enrolled to college before)</p>
                <select class="form-select d-inline-block my-3" id="College">
                    <option selected>Select One</option>
                    <option value="abm">ABM</option>
                    <option value="humss">HUMSS</option>
                    <option value="STEM">STEM</option>
                    <option value="ICT">ICT</option>
                    <option value="GAS">GAS</option>
                </select>
                <p class="fw-bold mb-0">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="location">Within Quezon City?</label>
                        <select class="form-select d-inline-block my-3" id="location" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="School">School Type</label>
                        <select class="form-select d-inline-block my-3" id="School" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="course">Course</label></p>
                        <select class="form-select d-inline-block" id="course">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduated">Date Graduated</label></p>
                        <input type="date" name="" id="graduated" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honors">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honors" class="form-control">
                    </div>
                </div>
                <hr class="divider">
                <p class="fw-bold">Technical Vocational (Leave it blank if you have not enrolled to vocational course before)</p>
                <input type="text" name="" id="" class="form-control">
                <p class="fw-bold mt-3">School Address</p>
                <input type="text" name="" id="" class="form-control">
                <p class="fw-bold mt-3">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="location">Within Quezon City?</label>
                        <select class="form-select d-inline-block" id="location" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="School">School Type</label>
                        <select class="form-select d-inline-block" id="School" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="course">Course</label></p>
                        <select class="form-select d-inline-block" id="course">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduated">Date Graduated</label></p>
                        <input type="date" name="" id="graduated" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honors">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honors" class="form-control">
                    </div>
                </div>
                <hr class="divider">
                <p class="fw-bold">Name of School (Senior High School or High School)</p>
                <input type="text" name="" id="" class="form-control">
                <p class="fw-bold mt-3">School Address</p>
                <input type="text" name="" id="" class="form-control">
                <p class="fw-bold mt-3">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="location">Within Quezon City?</label>
                        <select class="form-select d-inline-block" id="location" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="School">School Type</label>
                        <select class="form-select d-inline-block" id="School" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="course">Course</label></p>
                        <select class="form-select d-inline-block" id="course">
                            <option selected>Select One</option>
                            <option value="abm">ABM</option>
                            <option value="humss">HUMSS</option>
                            <option value="STEM">STEM</option>
                            <option value="ICT">ICT</option>
                            <option value="GAS">GAS</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduated">Date Graduated</label></p>
                        <input type="date" name="" id="graduated" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honors">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honors" class="form-control">
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