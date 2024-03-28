<?php
$pageTitle = "Programs Offered";
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
$backLink = "../index.php#programs_offered";
$customHeadingStyle = "text-uppercase";
$dynamicContent = '
<h3>College of Business and Accountancy  </h3>
<p>BS in Accountancy <br>
BS in Entrepreneurship <br>
BS of Management Accounting </p>
<h3>College of Computer Studies</h3>
<p>BS in Computer Science <br>
BS in Information Systems <br>
BS in Information Technology</p>
<h3>College of Education</h3>
<p> Bachelor of Early Childhood Education</p>
<h3>College of Engineering </h3>
<p>  BS in Electronics Engineering <br>
BS in Industrial Engineering </p>
';

include('./faq_template.php');
