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
    <title>Quezon City University - View Profile</title>
    <style>
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
            color: white;
            transition: all 0.5s;
        }

        hr.divider {
            width: 100%;
        }

        #main-container {
            margin-top: 160px;
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
        <div id="content-form" class="p-5 mt-3">
            <?php include('../shared/logoutModal.php') ?>
            <div class="d-flex justify-content-evenly">
                <img src="../../images/QCU-Logo.png" alt="QCU" height="100px">
                <div class="text-center">
                    <p class="fw-bold fs-4 m-0">QUEZON CITY UNIVERSITY</p>
                    <p class="m-0">673 Quirino Hi-Way, San Bartolome, Novaliches Q.C</p>
                    <p class="fw-bold fs-5 m-0">ADMISSIONS OFFICE</p>
                    <p class="m-0">STUDENT APPLICATION FORM</p>
                    <p><span class="text-danger">1st</span> SEM, AY: <span class="text-danger">2024-2025</span></p>
                </div>
                <img src="../../images/blake.jpg" alt="blake" height="150px" style="border: 2px solid black;">
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <h1 class="fs-2">Personal Information</h1>
            <hr class="divider">
            <p class="fw-bold">Full Name</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="Last Name" class="form-control">
                <input type="text" name="" id="" placeholder="First Name" class="form-control">
                <input type="text" name="" id="" placeholder="Middle Name" class="form-control">
                <input type="text" name="" id="" placeholder="Suffix" class="form-control">
            </div>
            <div class="mt-3 row row-cols-3">
                <div class="d-flex flex-column col">
                    <p class="fw-bold">Date of Birth</p>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold">Birth Place</p>
                    <input type="text" name="" id="" placeholder="Select Place" class="form-control">
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold">Gender</p>
                    <select class="form-select d-inline-block" onchange="nextPage()" id="gender">
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
                    <p class="fw-bold">Religion</p>
                    <select class="form-select d-inline-block" onchange="nextPage()" id="gender">
                        <option selected>Select One</option>
                        <option value="abm">ABM</option>
                        <option value="humss">HUMSS</option>
                        <option value="STEM">STEM</option>
                        <option value="ICT">ICT</option>
                        <option value="GAS">GAS</option>
                    </select>
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold">Citizenship</p>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold">Civil Status</p>
                    <select class="form-select d-inline-block" onchange="nextPage()" id="gender">
                        <option selected>Select One</option>
                        <option value="abm">ABM</option>
                        <option value="humss">HUMSS</option>
                        <option value="STEM">STEM</option>
                        <option value="ICT">ICT</option>
                        <option value="GAS">GAS</option>
                    </select>
                </div>
            </div>
            <p class="fw-bold mt-3">Present Address</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="House No./Street" class="form-control">
                <input type="text" name="" id="" placeholder="Barangay" class="form-control">
                <input type="text" name="" id="" placeholder="Municipality" class="form-control">
                <input type="text" name="" id="" placeholder="District" class="form-control">
                <input type="text" name="" id="" placeholder="Zip Code" class="form-control">
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <h2 class="fs-2 mt-4">Basic Information</h2>
            <hr class="divider">
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
            <div class="d-flex gap-5">
                <div class="d-flex flex-column">
                    <p class="fw-bold">Applying as</p>
                    <input type="text" name="" id="" class="form-control" disabled>
                </div>
                <div class="d-flex flex-column">
                    <p class="fw-bold">Year Level</p>
                    <input type="text" name="" id="" class="form-control" disabled>
                </div>
                <div class="d-flex flex-column">
                    <p class="fw-bold">Term</p>
                    <input type="text" name="" id="" class="form-control" disabled>
                </div>
                <div class="d-flex flex-column">
                    <p class="fw-bold">Academic Year</p>
                    <input type="text" name="" id="" class="form-control" disabled>
                </div>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <h2 class="fs-2 mt-4">Educational Attainment</h2>
            <hr class="divider">
            <p class="fw-bold m-0">College</p>
            <select class="form-select d-inline-block my-3" id="College">
                <option selected>Select One</option>
                <option value="abm">ABM</option>
                <option value="humss">HUMSS</option>
                <option value="STEM">STEM</option>
                <option value="ICT">ICT</option>
                <option value="GAS">GAS</option>
            </select>
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
            <!-- ----------------------------------------------------------------------------------- -->
            <h2 class="fs-2 mt-4">Family Background</h2>
            <hr class="divider">
            <p class="fw-bold">Father's Full Name</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="Last Name" class="form-control">
                <input type="text" name="" id="" placeholder="First Name" class="form-control">
                <input type="text" name="" id="" placeholder="Middle Name" class="form-control">
                <input type="text" name="" id="" placeholder="Suffix" class="form-control">
            </div>
            <div class="mt-3 row row-cols-3">
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Occupation">Occupation</label></p>
                    <input type="text" name="" id="Occupation" class="form-control">
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Educational">Educational Attainment</label></p>
                    <select class="form-select d-inline-block" id="Educational">
                        <option selected>Select One</option>
                        <option value="abm">ABM</option>
                        <option value="humss">HUMSS</option>
                        <option value="STEM">STEM</option>
                        <option value="ICT">ICT</option>
                        <option value="GAS">GAS</option>
                    </select>
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Contact">Contact Number</label></p>
                    <input type="text" name="" id="Contact" class="form-control">
                </div>
            </div>
            <p class="fw-bold mt-3">Mother’s Maiden Name</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="Last Name" class="form-control">
                <input type="text" name="" id="" placeholder="First Name" class="form-control">
                <input type="text" name="" id="" placeholder="Middle Name" class="form-control">
            </div>
            <div class="mt-3 row row-cols-3">
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Occupation">Occupation</label></p>
                    <input type="text" name="" id="Occupation" class="form-control">
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Educational">Educational Attainment</label></p>
                    <select class="form-select d-inline-block" id="Educational">
                        <option selected>Select One</option>
                        <option value="abm">ABM</option>
                        <option value="humss">HUMSS</option>
                        <option value="STEM">STEM</option>
                        <option value="ICT">ICT</option>
                        <option value="GAS">GAS</option>
                    </select>
                </div>
                <div class="d-flex flex-column col">
                    <p class="fw-bold"><label for="Contact">Contact Number</label></p>
                    <input type="text" name="" id="Contact" class="form-control">
                </div>
            </div>
            <p class="fw-bold mt-3">Address</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="House No./Street" class="form-control">
                <input type="text" name="" id="" placeholder="Barangay" class="form-control">
                <input type="text" name="" id="" placeholder="Municipality" class="form-control">
                <input type="text" name="" id="" placeholder="District" class="form-control">
                <input type="text" name="" id="" placeholder="Zip Code" class="form-control">
            </div>
            <p class="fw-bold mt-3">Guardian’s Full Name</p>
            <div class="input-group">
                <input type="text" name="" id="" placeholder="Last Name" class="form-control">
                <input type="text" name="" id="" placeholder="First Name" class="form-control">
                <input type="text" name="" id="" placeholder="Middle Name" class="form-control">
                <input type="text" name="" id="" placeholder="Suffix" class="form-control">
            </div>
            <div class="d-flex justify-content-between gap-4">
                <div style="width: 50%;">
                    <label for="Relationship" class="fw-bold my-3">Relationship</label>
                    <input type="text" name="" id="Relationship" class="form-control">
                </div>
                <div style="width: 50%;">
                    <label for="Contact" class="fw-bold my-3">Contact Number</label>
                    <input type="text" name="" id="Contact" class="form-control">
                </div>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <h2 class="fs-2 mt-4">Person to be notified in case of Emergency</h2>
            <hr class="divider">
            <form action="./create.php" method="post">
                <p class="fw-bold">Full Name</p>
                <div class="input-group">
                    <input type="text" name="" id="" placeholder="Last Name" class="form-control">
                    <input type="text" name="" id="" placeholder="First Name" class="form-control">
                    <input type="text" name="" id="" placeholder="Middle Name" class="form-control">
                    <input type="text" name="" id="" placeholder="Suffix" class="form-control">
                </div>
                <div class="d-flex justify-content-between gap-4">
                    <div style="width: 50%;">
                        <label for="Relationship" class="fw-bold my-3">Relationship</label>
                        <input type="text" name="" id="Relationship" class="form-control">
                    </div>
                    <div style="width: 50%;">
                        <label for="Contact" class="fw-bold my-3">Contact Number</label>
                        <input type="text" name="" id="Contact" class="form-control">
                    </div>
                </div>
                <p class="fw-bold mt-3">Address</p>
                <div class="input-group">
                    <input type="text" name="" id="" placeholder="House No./Street" class="form-control">
                    <input type="text" name="" id="" placeholder="Barangay" class="form-control">
                    <input type="text" name="" id="" placeholder="Municipality" class="form-control">
                    <input type="text" name="" id="" placeholder="District" class="form-control">
                    <input type="text" name="" id="" placeholder="Zip Code" class="form-control">
                </div>
            </form>
        </div>
    </div>
    <p class="text-end" style="margin: 20px 125px 20px 0;"><a href="./index.php" class="text-decoration-none text-white p-2 rounded-3 black-on-hover" style="background-color: var(--main-color);">Back to Search Tab</a></p>
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