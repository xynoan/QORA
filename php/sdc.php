<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <title>Quezon City University - SELECTION FOR A DEGREE PROGRAM AND CAMPUS</title>
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

        .container>div>a.back {
            position: absolute;
            top: 155px;
            left: 35px;
        }
    </style>
</head>

<body>
    <?php include('../html/header.html') ?>
    <main class="container">
        <div class="border border-black rounded-top-3 rounded-bottom-5" id="section">
            <a href="./index.php#navigation_links" class="back"><i class="fa-solid fa-arrow-rotate-left p-2 text-black"></i></a>
            <h2 class="text-white rounded-top-3 rounded-bottom-4" id="subHeading">SELECTION FOR A DEGREE PROGRAM AND CAMPUS</h2>
            <p id="qcian-details" class="p-5 rounded-bottom-5">Qualified applicants for a given campus are ranked
                according to their ratings
                and the available slots of their preferred program. <br><br>

                Applicants who do not qualify for their first choice of Degree Program or Campus will be channeled to
                their
                second or third choice depending on the availability of slots.<br><br>

                'Once admitted and enrolled at QCU, you are not allowed to enroll in any other degree program at another
                university.</p>
        </div>
    </main>
    <?php include('../html/footer.html') ?>
    <?php include('../html/script.html') ?>
</body>

</html>