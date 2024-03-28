<?php
$pageTitle = "QCUCAT PROCEDURE";
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
$backLink = "../index.php#dpn";
$dynamicContent = '
    <h3>Step 1</h3>
                <p>Register using the newly created g-mail account and upload the requirements below in the QCU College
                    Admission Test (QCUCAT) Application Link. Remember your password because this will be used for
                    receiving
                    notifications about the status of your application, invite for department interview, for Admission
                    and
                    Enrollment purposes. You will be using this email for your entire stay at QCU.</p>
                <h3>Step 2</h3>
                <p> The Admissions Office will evaluate the applicants according to the completeness of their submitted
                    requirements. Applicants with complete requirements will be endorsed to the Guidance Office for the
                    schedule of examination.</p>
                <h3>Step 3</h3>
                <p> The Guidance Office will notify the applicants one week ahead of their scheduled examination through
                    their registered email address indicating their schedule of examination with primary instructions
                    together with the Google Meet link. Please check your email\'s spam/junk folder also where our email
                    might be redirected.</p>
                <h3>Step 4</h3>
                <p> QCU CAT Passers will be referred to the Dean of their 1st preferred course for an interview and the
                    results will be sent to the admissions office. (Examinees are advised to check their registered
                    email or
                    your contact numbers for the schedule of the interview.)</p>
                <h3>Step 5</h3>
                <p> A list of qualified students for Admission will be posted on June 2024, at qcu.edu.ph. Students will
                    be
                    informed to submit all the original hard copies of the documentary requirements indicated at the
                    back of
                    the QCU Admission Application Form to secure their enrollment slot. Submission will be via courier,
                    Drop
                    Boxes at the gate, or they will be given an appointment to submit their requirements. <br><br>

                    Requirements should be sealed in a long brown envelope with a list of documents to be
                    submitted.<br><br>

                    Passing the entrance examination does not guarantee enrollment at QCU, passers must submit complete
                    admission requirements to secure a slot for enrollment.</p>
';

include('./faq_template.php');
?>
