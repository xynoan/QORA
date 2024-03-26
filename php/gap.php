<?php
$pageTitle = "GENERAL ADMISSION POLICY";
$customStyle = '
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
';
$backLink = "./index.php#navigation_links";
$dynamicContent = '
    <p>A student desiring to enroll in Quezon City University
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
';

include('./faq_template.php');
?>
