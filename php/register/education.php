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
                <p class="fw-bold"><label for="College">College (Leave it blank if you have not enrolled to college before)</label></p>
                <input type="text" name="" id="College" class="form-control mb-3">
                <p class="fw-bold mt-3"><label for="address">School Address</label></p>
                <input type="text" name="" id="address" class="form-control mb-3">
                <p class="fw-bold mb-0">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="location">Within Quezon City?</label>
                        <select class="form-select d-inline-block my-3" id="location" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="School">School Type</label>
                        <select class="form-select d-inline-block my-3" id="School" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                            <option value="Local">Local</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="course">Course</label></p>
                        <input type="text" name="" id="course" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduated">Date Graduated</label></p>
                        <input type="date" name="" id="graduated" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honors">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honors" class="form-control" placeholder="i.e. Top 1, High Honors, etc.">
                    </div>
                </div>
                <hr class="divider">
                <p class="fw-bold"><label for="vocational">Technical Vocational (Leave it blank if you have not enrolled to vocational course before)</label></p>
                <input type="text" name="" id="vocational" class="form-control">
                <p class="fw-bold mt-3"><label for="addressVoc">School Address</label></p>
                <input type="text" name="" id="addressVoc" class="form-control">
                <p class="fw-bold mt-3">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="locationVoc">Within Quezon City?</label>
                        <select class="form-select d-inline-block" id="locationVoc" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="SchoolVoc">School Type</label>
                        <select class="form-select d-inline-block" id="SchoolVoc" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                            <option value="Local">Local</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="courseVocational">Course</label></p>
                        <input type="text" name="" id="courseVocational" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduatedVoc">Date Graduated</label></p>
                        <input type="date" name="" id="graduatedVoc" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honorsVoc">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honorsVoc" class="form-control" placeholder="i.e. Top 1, High Honors, etc.">
                    </div>
                </div>
                <hr class="divider">
                <p class="fw-bold"><label for="hs">Name of School (Senior High School or High School)</label></p>
                <input type="text" name="" id="hs" class="form-control">
                <p class="fw-bold mt-3"><label for="addressHs">School Address</label></p>
                <input type="text" name="" id="addressHs" class="form-control">
                <p class="fw-bold mt-3">Location</p>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <label for="locationHs">Within Quezon City?</label>
                        <select class="form-select d-inline-block" id="locationHs" style="width: 65%;">
                            <option selected>Select One</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div style="width: 50%;">
                        <label for="SchoolHs">School Type</label>
                        <select class="form-select d-inline-block" id="SchoolHs" style="width: 80%;">
                            <option selected>Select One</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                            <option value="Local">Local</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 row row-cols-3">
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="courseHs">Course</label></p>
                        <input type="text" name="" id="courseHs" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="graduatedHs">Date Graduated</label></p>
                        <input type="date" name="" id="graduatedHs" class="form-control">
                    </div>
                    <div class="d-flex flex-column col">
                        <p class="fw-bold"><label for="honorsHs">Honors Received (With Certificate)</label></p>
                        <input type="text" name="" id="honorsHs" class="form-control" placeholder="i.e. Top 1, High Honors, etc.">
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