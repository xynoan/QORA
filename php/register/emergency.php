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
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
            <h1 class="mt-3">Person to be notified in case of Emergency</h1>
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