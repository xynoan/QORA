<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
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

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        #cancel_application:hover {
            background-color: var(--main-color) !important;
            color: white !important;
            transition: all 0.5s !important;
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
    <?php include('../html/header.html') ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3">
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 84%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr style="width: 100%;">
            <form action="./reference_ID.php" method="post">
                <h2 class="text-center mb-4">Input Review</h2>
                <div class="d-flex gap-5">
                    <div class="first-half">
                        <div class="row row-cols-3 text-center mb-3">
                            <div class="col text-uppercase fw-bold mb-2">Year Level</div>
                            <div class="col text-uppercase fw-bold mb-2">TERM</div>
                            <div class="col text-uppercase fw-bold mb-2">Applying as</div>
                            <div class="col"><input type="text" name="" id="" class="form-control"></div>
                            <div class="col"><input type="text" name="" id="" class="form-control"></div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bold text-center">ACADEMIC YEAR</p>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="text" name="" id="" class="form-control">
                                    <span>TO</span>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <p class="fw-bold text-uppercase text-center">program chosen</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="second-half">
                        <img height="170px" src="https://i.pinimg.com/564x/fc/d8/63/fcd863cae619ccaa27ae4c69d97d901a.jpg" alt="">
                    </div>
                </div>
                <div class="container text-center">
                    <div class="row row-cols-5">
                        <div class="col">
                            <p class="fw-bold">Subject/Courses</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">Remarks</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">No. of Units</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold">Grade</p>
                        </div>
                        <div class="col"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><input type="text" class="form-control"></div>
                        <div class="col"><button type="button" class="btn btn-success">Add</button></div>
                    </div>
                </div>
                <div class="container text-center mt-4" style="width: 35%;">
                    <div class="row row-cols-2">
                        <div class="col mb-3">
                            <p class="fw-bold">Total No. of Units</p>
                        </div>
                        <div class="col"> <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="col">
                            <p class="fw-bold">GWA</p>
                        </div>
                        <div class="col"> <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn next text-white" id="previousButton" type="button"><i class="fa-solid fa-chevron-left"></i> Previous</button>
                    <button class="btn next text-white" type="button" data-bs-toggle="modal" data-bs-target="#consent">Next <i class="fa-solid fa-chevron-right"></i></button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="consent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-danger text-center" id="exampleModalLabel">Electronic Consent Form for Student Application</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span class="fw-bold">Please read the following carefully and indicate your consent by checking the box provided:</span><br><br>
                                I, [Full Name], hereby consent to participate in the student application process for Quezon City University Online Registration Appointment (QORA). I understand that by providing my electronic signature below, I am agreeing to the terms and conditions outlined herein.
                            </div>
                            <div class="modal-footer d-flex flex-column align-items-end">
                                <button type="submit" class="btn btn-primary next" style="width: 50%; border: 2px solid var(--main-color);">Agree and Submit</button>
                                <button id="cancel_application" type="button" class="fw-bold btn btn-secondary cancel_application" data-bs-dismiss="modal" style="width: 50%; border: 2px solid var(--main-color); background: white; color: var(--main-color);">Cancel Application</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html') ?>
    <?php include('../html/script.html'); ?>
</body>

</html>