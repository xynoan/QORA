<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <title>Quezon City University - GENERAL ADMISSION POLICY</title>
    <style>
        main {
            margin-top: 150px;
        }

        h2#subHeading {
            background-color: var(--main-color);
            margin-bottom: 0;
            padding: 15px 15px 15px 40px;
        }

        #qcian-details {
            background-color: white;
            margin-bottom: 0;
        }

        div#section {
            margin-bottom: 2rem;
        }

        .fa-arrow-rotate-left {
            font-size: 25px;
            border: 2px solid black;
            border-radius: 50%;
        }

        .container>a.back {
            position: absolute;
            top: 155px;
            left: 35px;
        }
    </style>
</head>

<body>
    <?php include('../html/header.html') ?>
    <main class="container">
        <a href="./index.php#navigation_links" class="back"><i class="fa-solid fa-arrow-rotate-left p-2 text-black"></i></a>
        <div class="border border-black rounded-top-3 rounded-bottom-5" id="section">
            <h2 class="text-white rounded-top-3 rounded-bottom-4" id="subHeading">GENERAL ADMISSION POLICY</h2>
            <p id="qcian-details" class="p-5 rounded-bottom-5">A student desiring to enroll in Quezon City University
                has to comply with the following
                Admission
                requirements: <br> <br>

                1. Must pass the QCU Admission Test <br>
                2. Must have at least a general weighted average of 80% or above for those who will take BSIT, BSENT,
                and BSIE. For ESA, BSECE, and BECED, see their respective admission policy. <br>
                3. Of good moral character<br>
                4. Physically and Mentally fit to pursue a college education<br>
                5. Must be a senior high school graduate, high school graduate (old curriculum), or ALS passer<br>
                eligible for college<br>
                6. Must pass the department interview</p>
        </div>
    </main>
    <?php include('../html/footer.html') ?>
    <?php include('../html/script.html') ?>
</body>

</html>