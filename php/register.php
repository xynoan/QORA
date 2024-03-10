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
            <form action="" method="post">
                <?php include('../html/forms/basic_info/firstRow.html') ?>
                <hr>
                <?php include('../html/forms/basic_info/secondRow.html') ?>
                <hr>
                <?php include('../html/forms/basic_info/thirdRow.html') ?>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
    <script src="../register.js"></script>
</body>

</html>