<?php
$pageTitle = "FRESHMEN ADMISSION REQUIREMENTS";
$customStyle = '
    main {
            margin-top: 150px;
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
$backLink = "../index.php#navigation_links";
$dynamicContent = '
    <p>Choose if you are Graduating Senior High School Student,
                    a SHS Graduate, High School Graduate. ALS Passers applicants can now register without F138 / REPORT
                    CARD
                    on the condition that they will submit their grades to complete their application for evaluation.
                </p>
                <div class="row row-cols-2 p-3">
                    <div class="col text-center fw-bold border-end border-black border-1">
                        <h3>BS ENTREP, BSIT, BSIE</h3>
                    </div>
                    <div class="col text-center fw-bold">
                        <h3>BSA, BSECE, BECED</h3>
                    </div>
                    <div class="col border-end border-black border-1">1. Fully accomplished QCU College Admission
                        Application Form with 2x2 picture
                        (white background
                        with name tag) and am.x Signature of Student over Printed Name on the space provided at the back
                        of the form.<br><br>
                    </div>
                    <div class="col">1. Fully accomplished QCU College Admission Application Form with 2x2 picture
                        (white background with name tag) and am.x Signature of Student over Printed Name on the space
                        provided at the back of the form.</div>
                    <div class="col border-end border-black border-1">
                        2. <span class="fw-bold">SF9 / Report Card / TOR / ALS Certificate</span><br>
                        (Front and Back Clear Copy)<br>
                        (Depends on their Admission Classification)<br><br>
                        • <span class="fw-bold">SHS Graduating this July</span><br>
                        Grade 12 2nd Qtr.<br><br>
                        • <span class="fw-bold">SHS Graduate</span><br>
                        SF9 12<br><br>
                        • <span class="fw-bold">HS Graduate</span><br>
                        Report Card<br><br>
                        • <span class="fw-bold">Transferee</span><br>
                        TOR (Complete Grades)<br><br>
                        • <span class="fw-bold">ALS Graduate</span><br>
                        ALS Certificate of Rating
                    </div>
                    <div class="col">
                        2. <span class="fw-bold">SF9 / Report Card / TOR / ALS Certificate</span><br>
                        (Front and Back Clear Copy)<br>
                        (Depends on their Admission Classification)<br><br>
                        • <span class="fw-bold">SHS Graduating this July</span><br>
                        Grade 12 2nd Qtr.<br><br>
                        • <span class="fw-bold">SHS Graduate</span><br>
                        SF9 12<br><br>
                        • <span class="fw-bold">HS Graduate</span><br>
                        Report Card<br><br>
                        • <span class="fw-bold">Transferee</span><br>
                        TOR (Complete Grades)<br><br>
                        • <span class="fw-bold">ALS Graduate</span><br>
                        ALS Certificate of Rating
                    </div>
                </div>
                <p class="fw-bold text-center mt-3">Note: Admissions of Transferees
                    depends on the
                    availability of slots</p>
';

include('./faq_template.php');
?>
