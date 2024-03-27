<?php
$pageTitle = "ADMISSIONS GUIDELINES: Qualifications";
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
    <h3>BACHELOR OF SCIENCE IN ACCOUNTANCY (BSA)</h3>
                <div class="row row-cols-2 p-3 my-4">
                    <div class="col text-center fw-bold border-end border-black border-1">
                        <h4>IF SHS GRADUATE</h3>
                    </div>
                    <div class="col text-center fw-bold">
                        <h4>IF TRANSFEREE</h3>
                    </div>
                    <div class="col border-end border-black border-1">1. Must have a general weighted average not lower
                        than 90% in Senior High School.<br>
                        2. Must have grades not lower than 90% in the following Senior High School subjects:<br>
                        A. General Mathematics<br>
                        B. English for Academic and Professional Purposes<br>
                        C. Reading and Writing Skills<br>
                        3. Must have a general weighted average not lower than 90%
                        in QCU College Admission Test.
                    </div>
                    <div class="col">1. Must have no grades lower than 88% or 2.0 in all his/her subjects. <br>
                        2. Must have a general weighted average not lower than 90% in QCU College Admission Test.<br>
                        3. Must pass the interview and/or examination administered by the Dean (CPA) or Program Chair
                        who will recommend for admission.</div>
                </div>
                <h3>BACHELOR OF SCIENCE IN ELECTRONIC ENGINEERING (BSECE)</h3>
                <div class="row row-cols-2 p-3 my-4">
                    <div class="col text-center fw-bold border-end border-black border-1">
                        <h4>IF SHS GRADUATE</h4>
                    </div>
                    <div class="col text-center fw-bold">
                        <h4>IF TRANSFEREE</h4>
                    </div>
                    <div class="col border-end border-black border-1">1. Must have a general weighted average not lower
                        than 90% in Senior High School.<br>
                        2. Must have grades not lower than 90% in the following Senior High School subjects:<br>
                        A. General Mathematics<br>
                        B. English for Academic and Professional Purposes<br>
                        C. Reading and Writing Skills<br>
                        3. Must have a general weighted average not lower than 90%
                        in QCU College Admission Test.
                    </div>
                    <div class="col">1. Must have no grades lower than 88% or 2.0 in all his/her subjects. <br>
                        2. Must have a general weighted average not lower than 90% in QCU College Admission Test.<br>
                        3. Must pass the interview and/or examination administered by the Dean (CPA) or Program Chair
                        who will recommend for admission.</div>
                </div>
                <h3>BACHELOR OF EARLY CHILDHOOD EDUCATION (BCEd)</h3>
                <div class="row row-cols-2 p-3 mt-4">
                    <div class="col text-center fw-bold border-end border-black border-1">
                        <h4>IF SHS GRADUATE</h4>
                    </div>
                    <div class="col text-center fw-bold">
                        <h4>IF TRANSFEREE</h4>
                    </div>
                    <div class="col border-end border-black border-1">1. Must have a general weighted average not lower
                        than 90% in Senior High School.<br>
                        2. Must have grades not lower than 90% in the following Senior High School subjects:<br>
                        A. General Mathematics<br>
                        B. English for Academic and Professional Purposes<br>
                        C. Reading and Writing Skills<br>
                        3. Must have a general weighted average not lower than 90%
                        in QCU College Admission Test.
                    </div>
                    <div class="col">1. Must have no grades lower than 88% or 2.0 in all his/her subjects. <br>
                        2. Must have a general weighted average not lower than 90% in QCU College Admission Test.<br>
                        3. Must pass the interview and/or examination administered by the Dean (CPA) or Program Chair
                        who will recommend for admission.</div>
';

include('./faq_template.php');
