<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <link rel="stylesheet" href="../css/enrollment.css">
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
    <?php include('../html/script.html'); ?>
</body>

</html>