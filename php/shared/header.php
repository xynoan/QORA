<nav class="fixed-top">
    <div class="container d-flex justify-content-between flex-wrap align-items-center">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <div class="hamburger" onclick="toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="nav-menu">
                <p class="text-white text-center fs-1 qora_paragraph m-0"><img src="<?php echo $imageLink ?>logo-white.png" alt="QORA" height="200px"></p>
                <div class="container d-flex">
                    <ul class="p-0 d-inline-block" id="level1">
                        <li class="has-submenu3"><a href="#" class="fs-3" id="be_a_QCIAN">Be a QCIAN
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></span></a>
                        </li>
                    </ul>
                    <ul class="submenu3 p-0">
                        <li><a href="<?php echo $beAQcianPath ?>dpn.php" class="fs-5 text-uppercase">Data Privacy Notice</a></li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>gap.php" class="fs-5 text-uppercase">General Admission Policy</a>
                        </li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>sdc.php" class="fs-5 text-uppercase">Selection for a degree program
                                and
                                campus</a></li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>far.php" class="fs-5 text-uppercase">Freshmen admission
                                requirements</a></li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>qcucat.php" class="fs-5 text-uppercase">QCUCAT procedure</a></li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>agc.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                Classification</a>
                        </li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>agq.php" class="fs-5 text-uppercase">Admissions Guidelines:
                                Qualification</a>
                        </li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>pc.php" class="fs-5 text-uppercase">Program Curriculum</a></li>
                        <hr>
                        <li><a href="<?php echo $beAQcianPath ?>gs.php" class="fs-5 text-uppercase">Grading System</a></li>
                    </ul>
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