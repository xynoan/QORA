<?php
$pageTitle = "ADMISSIONS GUIDELINES: Classifications";
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
            height: 60vh;
            margin-bottom: 0;
            overflow-y: auto;
        }
        
        div#section {
            margin-bottom: 2rem;
            overflow: hidden;
        }

        #qcian-details::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }
        
        #qcian-details::-webkit-scrollbar {
            width: 5px;
            background-color: #F5F5F5;
        }
        
        #qcian-details::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
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
$backLink = "./index.php#dpn";
$dynamicContent = '
    <h3>1. FRESHMEN</h3>
                <p>
                    a. High School Graduates (2015 and below) or Senior High School Graduates who must not have enrolled
                    in
                    any academic or college subject/s prior to their enrollment as new college freshmen. <br>
                    b. Students enrolled in 6 months and below vocational courses.<br>
                    c. Alternative Learning System Passers (ALS)<br><br>
                </p>
                <h3>2. TRANSFEREES (admission of transferees are subject to the availability of slots)</h3>
                <p> a. Students who have enrolled in any course leading to a degree program before enrollment in
                    QCU.<br>
                    b. Students who graduated from any I or 2 years Technical Vocational Courses.<br>
                    c. 2nd Degree Course Taker (already a graduate of a Bachelor\'s Degree is not eligible to
                    CHED-UniFAST)</p>
';

include('./faq_template.php');
