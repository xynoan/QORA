<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link.html -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../images/logo-white.png" type="image/x-icon">
    <title>Quezon City University - <?php echo $pageTitle; ?></title>
    <style>
        .fa-arrow-rotate-left:hover {
            transition: background-color 0.5s, color 0.5s;
            background-color: black;
            color: white !important;
        }

        <?php echo $customStyle; ?>
    </style>
</head>

<body>
    <!-- header.html -->
    <nav class="fixed-top">
        <div class="container d-flex justify-content-between flex-wrap align-items-center">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <div class="hamburger" onclick="toggleMenu()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="nav-menu">
                    <p class="text-white text-center fs-1 qora_paragraph m-0"><img src="../../images/logo-white.png" alt="QORA" height="200px"></p>
                    <div class="container">
                        <ul class="p-0 d-inline-block">
                            <li class="has-submenu3"><a href="#" class="fs-3">Be a QCIAN
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                <ul class="submenu3">
                                    <li><a href="./dpn.php" class="fs-5 text-uppercase">Data Privacy Notice</a></li>
                                    <hr>
                                    <li><a href="./gap.php" class="fs-5 text-uppercase">General Admission Policy</a>
                                    </li>
                                    <hr>
                                    <li><a href="./sdc.php" class="fs-5 text-uppercase">Selection for a degree program
                                            and
                                            campus</a></li>
                                    <hr>
                                    <li><a href="./far.php" class="fs-5 text-uppercase">Freshmen admission
                                            requirements</a></li>
                                    <hr>
                                    <li><a href="./qcucat.php" class="fs-5 text-uppercase">QCUCAT procedure</a></li>
                                    <hr>
                                    <li><a href="./agc.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                            Classification</a>
                                    </li>
                                    <hr>
                                    <li><a href="./agq.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                            Qualification</a>
                                    </li>
                                    <hr>
                                    <li><a href="./pc.php" class="fs-5 text-uppercase">Program Curriculum</a></li>
                                    <hr>
                                    <li><a href="./gs.php" class="fs-5 text-uppercase">Grading System</a></li>
                                </ul>
                            </li>
                            <hr>
                            <li class="has-submenu"><a href="#" class="fs-3">Programs Offered
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                <ul class="submenu">
                                    <li class="has-submenu10"><a href="#" class="fs-4 text-uppercase">college of business
                                            and accountancy
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu10">
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Science In Accountancy
                                                </a></li>
                                            <hr>
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Science In
                                                    Entrepreneurship </a></li>
                                            <hr>
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Management accounting
                                                </a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu11"><a href="#" class="fs-4 text-uppercase">college of computer
                                            studies
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu11">
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor of Science in Computer
                                                    Science
                                                </a></li>
                                            <hr>
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor of Science in Information
                                                    System </a></li>
                                            <hr>
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor of Science in Information
                                                    Technology
                                                </a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu2"><a href="#" class="fs-4 text-uppercase">college of education
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu2">
                                            <li><a href="#" class="fs-5 text-uppercase">bachelor of early childhood
                                                    education </a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu12"><a href="#" class="fs-4 text-uppercase">college of engineering
                                            &nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu12">
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor of Science in Industrial Engineering
                                                </a></li>
                                            <hr>
                                            <li><a href="#" class="fs-5 text-uppercase">Bachelor of Science in Electronics Engineering </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li class="has-submenu4"><a href="#" class="fs-3">Campus
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                <ul class="submenu4">
                                    <li><a href="#" class="fs-4 text-uppercase">san bartolome campus</a></li>
                                    <hr>
                                    <li><a href="#" class="fs-4 text-uppercase">batasan campus</a></li>
                                    <hr>
                                    <li><a href="#" class="fs-4 text-uppercase">san francisco campus</a></li>
                                </ul>
                            </li>
                            <hr>
                            <li class="has-submenu5"><a href="#" class="fs-3">Contact Us
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                <ul class="submenu5">
                                    <li class="has-submenu8"><a href="#" class="fs-5">Office of VP for Academic Affairs <br>
                                            <span class="text-uppercase">dr. bradford antonio c. martinez</span>
                                            &nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu8">
                                            <li><a href="#" class="fs-5">Contact Number: 8806-3324 <br>
                                                    Email: ovpaa2020@gmail.com</a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu9"><a href="#" class="fs-5">Chief, Admissions <br>
                                            <span class="text-uppercase">ms. annie lou m. gonzales</span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu9">
                                            <li><a href="#" class="fs-5">Contact Number: 8681-9135 <br>
                                                    Email: admission@qcu.edu.ph</a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu6"><a href="#" class="fs-5">Registrar and Admission Division <br>
                                            <span class="text-uppercase">ms. sheryl p. mostajo</span> (Registrar)
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu6">
                                            <li><a href="#" class="fs-5">Contact Number: 8806-3470 <br>
                                                    Email: registrar@qcu.edu.ph</a></li>
                                        </ul>
                                    </li>
                                    <hr>
                                    <li class="has-submenu7"><a href="#" class="fs-5">Student Affairs Division <br>
                                            <span class="text-uppercase">ms. merly p. dela cruz</span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                                        <ul class="submenu7">
                                            <li><a href="#" class="fs-5">Contact Number: 8806-3165 <br>
                                                    Email: sasd2020@gmail.com</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="../index.php" class="text-decoration-none fw-bold fs-2" style="color: var(--main-color);"><img class="qora_image" src="../../images/logo.png" alt="QORA" height="70px"></a>
            </div>
            <ul class="nav gap-3 fw-bold">
                <li class="nav-item"><a href="../signin.php" class="nav-link px-2 text-white nav_signin">Sign in</a>
                </li>
            </ul>
        </div>
        <p class="text-uppercase fs-4 text-center text-white p-2 m-0 border-top border-3 border-primary" style="background-color: black;">mula sa tahanan ng husay
            at talino, para sa bayan...</p>
    </nav>
    <main class="container">
        <div class="border border-black rounded-top-3 rounded-bottom-5" id="section">
            <a href="<?php echo $backLink; ?>" class="back"><i class="fa-solid fa-arrow-rotate-left p-2 text-black"></i></a>
            <h2 class="text-white rounded-top-3 rounded-bottom-4 <?php echo $customHeadingStyle; ?>" id="subHeading"><?php echo $pageTitle; ?></h2>
            <div id="qcian-details" class="p-4 <?php echo $customDetailsStyle ?? "rounded-bottom-5"; ?>">
                <?php echo $dynamicContent; ?>
            </div>
        </div>
    </main>
    <!-- footer.html -->
    <footer class="text-white">
    <div class="p-5 footer">
        <div class="container d-flex">
            <div class="navigation">
                <h2>Be a QCIAN</h2>
                <p><a href="./dpn.php" class="text-decoration-none text-white footer_link">Data Privacy Notice</a> <br>
                    <a href="./gap.php" class="text-decoration-none text-white">General Admission Policy</a><br>
                    <a href="./sdc.php" class="text-decoration-none text-white">Selection for a degree program and campus</a><br>
                    <a href="./far.php" class="text-decoration-none text-white">Freshmen admission requirements</a><br>
                    <a href="./qcucat.php" class="text-decoration-none text-white">QCUCAT procedure</a><br>
                    <a href="./agc.php" class="text-decoration-none text-white">Admissions Guidelines: Classification</a><br>
                    <a href="./agq.php" class="text-decoration-none text-white">Admissions Guidelines: Qualification</a><br>
                    <a href="./pc.php" class="text-decoration-none text-white">Program Curriculum</a><br>
                    <a href="./gs.php" class="text-decoration-none text-white">Grading System</a></p>
                <h2><a href="#" class="text-decoration-none text-white">Programs Offered</a></h2>
                <h2>Campus</h2>
                <p><a href="#" class="text-decoration-none text-white">San Bartolome Campus</a><br>
                    <a href="#" class="text-decoration-none text-white">Batasan Campus</a><br>
                    <a href="#" class="text-decoration-none text-white">San Francisco</a></p>
                <h2><a href="#" class="text-decoration-none text-white">Contacts</a></h2>
                <h2>QORA</h2>
                <p><a href="../signin.php" class="text-decoration-none text-white">Sign In</a></p>
            </div>
            <div class="address">
                <h2 class="fw-bold">Address</h2>
                <p><i class="fa-solid fa-location-dot"></i> 673 Quirino Highway, Novaliches, Quezon City, Metro
                    Manila</p>
                <h2 class="fw-bold">Phone Number</h2>
                <p><i class="fa-solid fa-phone"></i> 286819135</p>
                <h2 class="fw-bold">E-mail Address</h2>
                <p><i class="fa-solid fa-envelope"></i> osas@qcu.edu.ph</p>
                <h2 class="fw-bold">Office Hours</h2>
                <p><i class="fa-solid fa-clock"></i> Monday to Friday : 8:00 AM to 5:00 PM </p>
            </div>
            <div class="form">
                <h2 class="fw-bold">HOW CAN WE ASSIST? </h2>
                <p>We are here to address any questions you may have. Please contact us and we will get back to you
                    as
                    soon
                    as possible </p>
                <form action="#" method="post">
                    <div class="row row-cols-2 row-gap-1 mb-1 form-grid">
                        <div class="input-group p-0">
                            <input class="form-control" type="text" name="" id="" placeholder="Name (LN, FN, MI.)">
                            <input class="form-control" type="email" name="" id="" placeholder="E-mail Address">
                        </div>
                        <div class="input-group p-0">
                            <input class="form-control" type="number" name="" id="" placeholder="Year Level">
                            <input class="form-control" type="text" name="" id="" placeholder="Course/Program">
                        </div>
                    </div>
                    <textarea class="d-block form-control" name="" cols="30" rows="10"
                        placeholder="Compose Message..."></textarea>
                    <button type="submit" class="btn p-3 fw-bold mt-2 d-block submit_message"><i
                            class="fa-solid fa-envelope-open"></i> Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <p class="p-3 text-center text-white copyright">Copyright <span id="year"> </span> © Quezon City
        University.</p>
</footer>                
    <!-- script.html -->
    <script src="../../index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/877d2cecdc.js" crossorigin="anonymous"></script>
</body>

</html>