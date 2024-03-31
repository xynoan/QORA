<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
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
    <?php include('../html/header.html'); ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3">
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
            </div>
            <h1 class="mt-3">Family Background</h1>
            <hr class="divider">
            <form action="./emergency.php" method="post">
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
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn next text-white" id="previousButton" type="button"><i class="fa-solid fa-chevron-left"></i> Previous</button>
                    <button class="btn next text-white" type="submit">Next <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
</body>

</html>