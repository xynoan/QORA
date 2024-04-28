<nav class="fixed-top">
    <div class="container d-flex justify-content-between flex-wrap align-items-center">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="hamburger" onclick="toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="nav-menu">
                <p class="text-white text-center fs-1 qora_paragraph m-0"><img src="<?php echo $imageLink ?>logo-white.png" alt="QORA" height="150px"></p>
                <div class="container d-flex p-0" id="hamburgerNav">
                    <ul class="p-0 d-inline-block" id="level1">
                        <li class="has-submenu3"><a href="#" class="fs-3" id="be_a_QCIAN">Be a QCIAN >></a>
                        </li>
                        <li class="has-submenu"><a href="#" class="fs-3" id="programsOffered">Programs Offered >></a>
                        </li>
                        <li class="has-submenu4"><a href="#" class="fs-3">Campus >></a>
                        </li>
                        <li class="has-submenu5"><a href="#" class="fs-3">Contact Us >></a>
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
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
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
                    <ul class="submenu3 p-0 level2" id="qcian-Submenu">
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>dpn.php" class="fs-5 text-uppercase">Data Privacy Notice</a></li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>gap.php" class="fs-5 text-uppercase">General Admission Policy</a>
                        </li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>sdc.php" class="fs-5 text-uppercase">Selection for a degree program
                                and
                                campus</a></li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>far.php" class="fs-5 text-uppercase">Freshmen admission
                                requirements</a></li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>qcucat.php" class="fs-5 text-uppercase">QCUCAT procedure</a></li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>agc.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                Classification</a>
                        </li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>agq.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                Qualification</a>
                        </li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>pc.php" class="fs-5 text-uppercase">Program Curriculum</a></li>
                        <li class="qcianList"><a href="<?php echo $beAQcianPath ?>gs.php" class="fs-5 text-uppercase">Grading System</a></li>
                    </ul>
                    <ul class="submenu p-0 level2--programs" id="programsSubmenu">
                        <li class="has-submenu10"><a href="#" class="fs-4 text-uppercase">college of business
                                and accountancy >></a>
                        </li>
                        <li class="has-submenu11"><a href="#" class="fs-4 text-uppercase">college of computer
                                studies >></a>
                        </li>
                        <li class="has-submenu2"><a href="#" class="fs-4 text-uppercase">college of education >></a>
                        </li>
                        <li class="has-submenu12"><a href="#" class="fs-4 text-uppercase">college of engineering >></a>
                        </li>
                    </ul>
                    <!-- wip -->
                    <!-- <ul class="submenu10" id="cba">
                        <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Science In Accountancy
                            </a></li>
                        <hr>
                        <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Science In
                                Entrepreneurship </a></li>
                        <hr>
                        <li><a href="#" class="fs-5 text-uppercase">Bachelor Of Management accounting
                            </a></li>
                    </ul> -->
                </div>
            </div>
            <a href="<?php echo $homePagePath ?>index.php" class="text-decoration-none fw-bold fs-2" style="color: var(--main-color);"><img class="qora_image" src="<?php echo $imageLink ?>logo.png" alt="QORA" height="70px"></a>
        </div>
        <ul class="nav gap-3 fw-bold">
            <li class="nav-item"><a href="<?php echo $loginPath ?>index.php" class="nav-link px-2 text-white nav_signin">Sign in</a>
            </li>
        </ul>
    </div>
    <p class="text-uppercase fs-4 text-center text-white p-2 m-0 border-top border-3 border-primary" style="background-color: #212529;">mula sa tahanan ng husay
        at talino, para sa bayan...</p>
</nav>