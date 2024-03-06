<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/enrollment.css">
    <link rel="shortcut icon"
        href="https://i0.wp.com/qcu.edu.ph/wp-content/uploads/2021/10/cropped-logo.jpg?fit=1500%2C1500&ssl=1"
        type="image/x-icon">
    <title>Quezon City University - Enrollment</title>
</head>

<body>
    <?php include('../html/account.html') ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-5 mt-3">
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%"></div>
            </div>
            <h1 class="mt-3">Student Enlistment Form</h1>
            <hr>
            <div class="d-flex flex-column align-items-center justify-content-center gap-3">
                <div class="square border border-black"></div>
                <button type="submit" class="btn text-white" id="submitImage">SUBMIT</button>
                <a href="#" class="text-black">Change</a>
            </div>
        </div>
    </div>
    <?php include('../html/footer.html') ?>
    <script src="../init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/877d2cecdc.js" crossorigin="anonymous"></script>
</body>

</html>