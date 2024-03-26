<?php
$pageTitle = "Program Curricculum";
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
    <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">GRADES</th>
                            <th scope="col">EQUIVALENT GRADE</th>
                            <th scope="col">GRADE</th>
                            <th scope="col">EQUIVALENT GRADE</th>
                            <th scope="col">REMARKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>98 - 100</td>
                            <td>1.0</td>
                            <td>83 - 85</td>
                            <td>2.25</td>
                            <td>INC - INCOMPLETE</td>
                        </tr>
                        <tr>
                            <td>95 - 97</td>
                            <td>1.25</td>
                            <td>80 - 82</td>
                            <td>2.50</td>
                            <td>OD - OFFICIALLY DROPPED</td>
                        </tr>
                        <tr>
                            <td>92 -94</td>
                            <td>1.50</td>
                            <td>77 - 79</td>
                            <td>2.75</td>
                            <td>UD - UNOFFICIALLY DROPPED</td>
                        </tr>
                        <tr>
                            <td>89 - 91</td>
                            <td>1.75</td>
                            <td>75 - 76</td>
                            <td>3.0</td>
                            <td>OW - OFFICIALLY WITHDRAWN</td>
                        </tr>
                        <tr>
                            <td>86 -88</td>
                            <td>2.00</td>
                            <td>Below 75</td>
                            <td>5.0</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <p>A student must be officially enrolled in the subjects he/she is attending in, to earn credits.
                    Otherwise, no credit shall be given to him/her. Further, any student of such cases, upon knowledge
                    of faculty concerned and the Registrar shall be dealt with the proper investigation and
                    administrative sanction. Moreover, a student is not allowed to enroll subjects with pre-requisite/s,
                    if he/she has incurred a 5.0 grade in the pre-requisite subjects. Whereas, graduating students are
                    allowed to have overload subjects of not more than six (6) units.</p>
                <h4>ABSENCES</h4>
                <p>A student who incurs absences of more than 20% of the prescribed number of classes or laboratory
                    period during the semester shall fail and earn no credit for the course or subject. Approved
                    absences shall not be counted against the maximum allowable
                </p>
                <h4>DROPPING OF SUBJECTS</h4>
                <p>
                    A student who wishes to officially drop a subject may so a week before the midterm examination.
                    Otherwise, dropping Of subjects beyond the stipulated period will not be entertained. In a case
                    where the student does not witfully attend his/her registered subjects in the current semester,
                    these subjects will be given 5.O
                </p>
                <h4>INCOMPLETE GRADES (INC)</h4>
                <p>Incomplete subjects should be completed within one (1) school year starting the date of recording the
                    INC grade by the Registrar. Otherwise, INC will automatically be rated 5.0. A student with INC is
                    allowed to enroll in the succeeding semester before filling out a completion form duly issued by the
                    Registrar.</p>
                <h4>FAILED GRADE (5.0)</h4>
                <p>A student who fails in three (3) academic subjects (9 units or equivalent) shall be subjected to
                    academic probation and shall be allowed to enroll in no more than fifteen (15) units. If a student
                    on academic probation fails in any of his/her subjects he/she shall be disqualified to study further
                    from the University. However, if the student passed all his/her subjects he/she shall be removed
                    from the academic probation and be allowed to enroll full load.</p>
                <h4>GRADUATION</h4>
                <p>Only students who have COMPLETED an requirements for graduation shall be allowed to graduate. These
                    requirements include PE and NSTP subjects. Students who complete ther course requirements during the
                    summer term or the first semester shall be included in the next regular graduation rites. Only
                    students who APPLY for during the designated application shall be included in the official list of
                    Candidates for Graduaton and the yearbook for the academic year.</p>
                <h4>WITHDRAWAL Of ENROLLMENT</h4>
                <p>A student may be charged for all school fees in full if he/she withdraws any time after the 2nd week
                    of classes</p>
';

include('./faq_template.php');
?>
