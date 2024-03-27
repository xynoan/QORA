<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <title>Quezon City University - <?php echo $pageTitle; ?></title>
    <style>
        .fa-arrow-rotate-left:hover {
            transition: background-color 0.5s, color 0.5s;
            background-color: black;
            color: white !important;
        }
        <?php echo $customStyle; ?>
    </style>
</head>

<body>
    <?php include('../html/header.html') ?>
    <main class="container">
        <div class="border border-black rounded-top-3 rounded-bottom-5" id="section">
            <a href="<?php echo $backLink; ?>" class="back"><i class="fa-solid fa-arrow-rotate-left p-2 text-black"></i></a>
            <h2 class="text-white rounded-top-3 rounded-bottom-4" id="subHeading"><?php echo $pageTitle; ?></h2>
            <div id="qcian-details" class="p-4 rounded-bottom-5">
                <?php echo $dynamicContent; ?>
            </div>
        </div>
    </main>
    <?php include('../html/footer.html') ?>
    <?php include('../html/script.html') ?>
</body>

</html>