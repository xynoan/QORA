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
                <input type="radio" name="applyingAs" id="shs"><label for="shs" class="ms-1"> Senior High School Graduate</label>
                <div class="dropdown d-inline-block">
                    <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Track
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Academic</a></li>
                        <li><a class="dropdown-item" href="#">Technical-Vocational-Livelihood</a></li>
                    </ul>
                </div>
                <div class="dropdown d-inline-block">
                    <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Strand
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">ABM</a></li>
                        <li><a class="dropdown-item" href="#">HUMSS</a></li>
                        <li><a class="dropdown-item" href="#">STEM</a></li>
                    </ul>
                </div>
                <div class="input-group gap-1">
                    <input type="radio" name="applyingAs" id="hsGraduate">
                    <label for="hsGraduate"> High School Graduate (Year 2015 and below)</label>
                </div>
                <input type="radio" name="applyingAs" id="transferee"><label for="transferee" class="ms-1">Transferee</label> <br>
                <div class="input-group gap-1 align-items-baseline">
                    <p>Applying for Accreditation of Subjects? </p>
                    <div class="dropdown d-inline-block">
                        <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select One
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Yes</a></li>
                            <li><a class="dropdown-item" href="#">No</a></li>
                        </ul>
                    </div>
                </div>
                <input type="radio" name="applyingAs" id="2ndDegree"><label for="2ndDegree" class="ms-1">2nd Degree Course Taker (Graduate of Bachelor’s Degree)</label>
                <hr class="divider">
                <div class="d-flex gap-5">
                    <div>
                        <p class="fw-bold">Preferred Course</p>
                        <div class="row row-cols-2 courseWidth d-flex align-items-baseline">
                            <div class="col mb-4 choice">First Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="BECEd">Bachelor of Early Childhood Education</option>
                                <option value="BSA">Bachelor of Science in Accountancy</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BSECE">Bachelor of Science in Electronics Engineering</option>
                                <option value="BSENT">Bachelor of Science in Entrepreneurship</option>
                                <option value="BSIS">Bachelor of Science in Information Systems</option>
                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                <option value="BSMA">Bachelor of Science in Management Accounting</option>
                            </select>
                            <div class="col mb-4 choice">Second Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="BECEd">Bachelor of Early Childhood Education</option>
                                <option value="BSA">Bachelor of Science in Accountancy</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BSECE">Bachelor of Science in Electronics Engineering</option>
                                <option value="BSENT">Bachelor of Science in Entrepreneurship</option>
                                <option value="BSIS">Bachelor of Science in Information Systems</option>
                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                <option value="BSMA">Bachelor of Science in Management Accounting</option>
                            </select>
                            <div class="col mb-4 choice">Third Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="BECEd">Bachelor of Early Childhood Education</option>
                                <option value="BSA">Bachelor of Science in Accountancy</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BSECE">Bachelor of Science in Electronics Engineering</option>
                                <option value="BSENT">Bachelor of Science in Entrepreneurship</option>
                                <option value="BSIS">Bachelor of Science in Information Systems</option>
                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                <option value="BSMA">Bachelor of Science in Management Accounting</option>
                            </select>
                            <div class="col mb-4 choice">Currently Enrolled?</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
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
                                <option value="sb">San Bartolome</option>
                                <option value="sf">San Francisco</option>
                                <option value="ba">Batasan</option>
                            </select>
                            <div class="col mb-4">Second Choice</div>
                            <select class="form-select d-inline-block course">
                                <option selected>Select One</option>
                                <option value="sb">San Bartolome</option>
                                <option value="sf">San Francisco</option>
                                <option value="ba">Batasan</option>
                            </select>
                            <div class="col mb-4">Third Choice</div>
                            <select class="form-select d-inline-block course" onchange="nextPage()">
                                <option selected>Select One</option>
                                <option value="sb">San Bartolome</option>
                                <option value="sf">San Francisco</option>
                                <option value="ba">Batasan</option>
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