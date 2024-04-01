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
    <title>Quezon City University - Enrollment</title>
    <style>
        #main-container {
            margin-top: 170px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
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

        .next {
            background-color: var(--main-color);
            width: 15%;
        }

        .college.active {
            color: white !important;
            border-radius: inherit;
            background-color: var(--main-color);
        }

        .college:hover {
            background-color: var(--main-color);
            border-radius: inherit;
            cursor: pointer;
            color: white !important;
            transition: all 0.5s;
        }

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
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
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 51%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr style="width: 100%;">
            <form action="./grade.php" method="post">
                <div class="border border-1 border-black rounded-4 mx-auto" style="width: 50%;">
                    <p style="background-color: var(--main-color); border-radius: inherit;" class="text-white text-center fw-bold p-2">PROGRAMS OFFERED</p>
                    <p class="text-uppercase text-center college p-2">College of Business and Accountancy</p>
                    <a id="CCS" onclick="toggleProgram()" style="color: black;" class=" p-2 d-block text-uppercase text-center mb-2 text-decoration-none college" data-bs-toggle="collapse" href="#CCS" role="button" aria-expanded="false" aria-controls="CCS">College of Computer Studies</a>
                    <div class="collapse" id="CCS">
                        <div class="card card-body border-0">
                            <div class="input-group gap-2 ms-4 mb-2">
                                <input type="radio" name="course" id="BSCS"><label for="BSCS"> Bachelor of Science in Computer Science</label>
                            </div>
                            <div class="input-group gap-2 ms-4 mb-2">
                                <input type="radio" name="course" id="BSIS"><label for="BSIS"> Bachelor of Science in Information Systems</label>
                            </div>
                            <div class="input-group gap-2 ms-4 mb-2">
                                <input type="radio" name="course" id="BSIT"><label for="BSIT"> Bachelor of Science in Information Technology</label>
                            </div>
                        </div>
                    </div>
                    <p class="text-uppercase text-center college p-2">College of Education</p>
                    <p class="text-uppercase text-center college p-2">College of Engineering</p>
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