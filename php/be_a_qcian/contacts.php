<?php
$pageTitle = "Contacts";
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
';
$backLink = "../index.php#contacts";
$customHeadingStyle = "text-uppercase";
$dynamicContent = '
<h3>Office of VP for Academic Affairs </h3>
<p>DR. BRADFORD ANTONIO C. MARTINEZ <br>
Contact Number: 8806-3324 Email: ovpaa2020@gmail.com</p>
<h3>Chief, Admissions</h3>
<p>MS. ANNIE LOU M. GONZALES <br>
Contact Number: 8681-9135 Email: admission@qcu.edu.ph</p>
<h3>Registrar and Admissions Division </h3>
<p>MS. SHERYL P. MOSTAJO (Registrar) <br>
Contact Number: 8806-3470 Email: registrar@qcu.edu.ph</p>
<h3>Student Affairs Division </h3>
<p>MS. MERLY P. DELA CRUZ <br>
Contact Number: 8806-3165 Email: sasd2020@gmail.com</p>
';

include('./faq_template.php');
