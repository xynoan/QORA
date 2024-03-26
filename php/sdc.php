<?php
$pageTitle = "SELECTION FOR A DEGREE PROGRAM AND CAMPUS";
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
    <p>Qualified applicants for a given campus are ranked
                according to their ratings
                and the available slots of their preferred program. <br><br>

                Applicants who do not qualify for their first choice of Degree Program or Campus will be channeled to
                their
                second or third choice depending on the availability of slots.<br><br>

                Once admitted and enrolled at QCU, you are not allowed to enroll in any other degree program at another
                university.</p>
';

include('./faq_template.php');
?>
