<?php
$pageTitle = "Program Curricculum";
$customHeadingStyle = "text-uppercase";
$customDetailsStyle = "rounded-4 border border-black m-3";
$customStyle = '
    main {
            margin-top: 150px;
        }

        #qcian-details {
            background-color: white;
            height: 100vh;
            margin-bottom: 0;
        }
        
        div#section {
            margin-bottom: 2rem;
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
$backLink = "../index.php#dpn";
$dynamicContent = '
     <embed src="../../COURSE_CURRICULUM.pdf" width="1010" height="590" 
 type="application/pdf">
';

include('./faq_template.php');
