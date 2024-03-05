<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="shortcut icon"
        href="https://i0.wp.com/qcu.edu.ph/wp-content/uploads/2021/10/cropped-logo.jpg?fit=1500%2C1500&ssl=1"
        type="image/x-icon">
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
    <script src="../init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/877d2cecdc.js" crossorigin="anonymous"></script>
</body>

</html>