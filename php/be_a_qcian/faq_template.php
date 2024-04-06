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
    <title>Quezon City University - <?php echo $pageTitle; ?></title>
    <style>
        .fa-arrow-rotate-left:hover {
            transition: background-color 0.5s, color 0.5s;
            background-color: black;
            color: white !important;
        }

        h1#subHeading {
            background-color: var(--main-color);
            margin-bottom: 0;
            padding: 15px 15px 15px 40px;
        }

        <?php echo $customStyle; ?>
    </style>
</head>

<body>
    <?php
    $beAQcianPath = "./";
    $homePagePath = "../";
    $imageLink = "../../images/";
    $loginPath = "../login/";
    include('../shared/header.php');
    ?>
    <main class="container">
        <div class="border border-black rounded-top-3 rounded-bottom-5" id="section">
            <a href="<?php echo $backLink; ?>" class="back"><i class="fa-solid fa-arrow-rotate-left p-2 text-black"></i></a>
            <h1 class="text-white fs-2 rounded-top-3 rounded-bottom-4 <?php echo $customHeadingStyle; ?>" id="subHeading"><?php echo $pageTitle; ?></h1>
            <div id="qcian-details" class="p-4 <?php echo $customDetailsStyle ?? "rounded-bottom-5"; ?>">
                <?php echo $dynamicContent; ?>
            </div>
        </div>
    </main>
    <?php
    $beAQcianPath = "./";
    $loginPath = "../login/";
    include('../shared/footer.php');
    ?>
    <?php
    $scriptPath = "../../";
    include('../shared/script.php');
    ?>
</body>

</html>