<?php
$pageTitle = "Batasan Campus";
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
$backLink = "../index.php#ba";
$customHeadingStyle = "text-uppercase";
$dynamicContent = '
<div class="d-flex justify-content-between">
    <div>
        <h3>Address</h3>
        <p>Batasan Rd, Quezon City, Metro Manila</p>
        <h3>Office Hours</h3>
        <p>Monday - Friday <br>
        8:00 am - 5:00pm</p>
    </div>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4146000065934!2d121.09164927413423!3d14.689130574905032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba10f0871a5d%3A0x99b9946d1b3b0bf6!2sQuezon%20City%20University%20-%20Batasan%20Campus!5e0!3m2!1sen!2sph!4v1711593351500!5m2!1sen!2sph" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<img src="../../images/ba.png" width="1060px"/>
';

include('./faq_template.php');
