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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%"></div>
            </div>
            <h1 class="mt-3">Personal Information</h1>
            <hr class="divider">
            <form action="./education.php" method="post">
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
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="LGBTQIA+">LGBTQIA+</option>
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
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
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