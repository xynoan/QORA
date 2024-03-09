<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <link rel="stylesheet" href="../css/register.css">
    <title>Quezon City University - Register</title>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3">
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%"></div>
            </div>
            <h1 class="mt-3">Basic Information</h1>
            <hr>
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
            <hr>
            <p class="fw-bold">Applying as (Choose appropriate answer)</p>
            <input type="checkbox" name="" id=""> Senior High School Graduate
            <div class="dropdown d-inline-block">
                <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Track
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown d-inline-block">
                <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
                    <button class="btn border-black dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
            <hr>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
</body>

</html>