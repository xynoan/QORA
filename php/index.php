<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html'); ?>
    <link rel="stylesheet" href="../css/style.css">
    <title>Quezon City University</title>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container" id="main-container">
        <p class="fw-bold text-start py-5 dancing-script-header-description">Mula sa Tahanan ng Husay at Talino, para
            sa Bayan...</p>
        <div class="d-flex" id="content">
            <div class="row row-cols-2 row-gap-3" id="grid">
                <img src="../images/Admissions-Office.png" alt="">
                <img src="../images/Image-1.png" alt="">
                <img src="../images/Image-2.png" alt="">
                <img src="../images/Image-3.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-between" id="beside_grid">
                <h1 class="text-white text-uppercase text-center">30 Years of Empowering Education from #1 City to
                    Global
                    Society</h1>
                <div>
                    <a class="text-white text-decoration-none d-inline-block fw-bold mb-2" href="./signin.php"
                        id="signin">Sign
                        in</a>
                    <a class="text-white text-decoration-none d-inline-block fw-bold mt-2" href="./qcian.php"
                        id="QCian">Be a
                        QCian</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html'); ?>
</body>

</html>