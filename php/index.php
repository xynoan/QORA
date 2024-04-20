<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../style.css";
    $shortcutIconLink = "../images/";
    include('./shared/link.php');
    ?>
    <style>
        h1 {
            width: 70%;
        }

        h3.motto {
            color: var(--brown);
            text-align: center;
        }

        section:first-child {
            background-image: url(../images/campus.JPG);
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        section:first-child>div {
            height: 100vh;
        }

        .years {
            text-shadow:
                0 1px 0px #010641,
                1px 0 0px #010641,
                1px 2px 1px #010641,
                2px 1px 1px #010641,
                2px 3px 2px #010641,
                3px 2px 2px #010641,
                3px 4px 2px #010641,
                4px 3px 3px #010641,
                4px 5px 3px #010641,
                5px 4px 2px #010641,
                5px 6px 2px #010641,
                6px 5px 2px #010641,
                6px 7px 1px #010641,
                7px 6px 1px #010641,
                7px 8px 0px #010641,
                8px 7px 0px #010641;
        }

        .first_half {
            width: 60%;
        }

        .first_half>.nav_buttons:hover,
        .register>.register_anchor:hover,
        .login_btn:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        .first_half>.nav_buttons,
        .register>.header,
        .login>.header,
        .register>.register_anchor,
        .login_btn {
            background-color: var(--main-color);
        }

        .first_half>.nav_buttons {
            display: block;
            border-radius: 15px;
            padding-left: 20px !important;
        }

        .register,
        .login {
            border: 2px solid var(--main-color);
            border-radius: 18px;
        }

        .next {
            background-color: var(--main-color);
            width: 15%;
        }

        .next:hover {
            background-color: black;
            transition: background-color 0.5s;
        }

        #cancel_application:hover {
            background-color: var(--main-color) !important;
            color: white !important;
            transition: all 0.5s !important;
        }

        .register>.header,
        .login>.header {
            border-radius: 10px 10px 10px 10px;
        }

        .email,
        .password {
            border: 2px solid var(--main-color);
            border-radius: 15px;
        }

        .forgot_password {
            font-size: 15px;
        }

        #nav_links {
            flex-wrap: wrap;
            padding: 2em;
        }

        @media (min-width: 768px) {
            #nav_links {
                flex-wrap: nowrap;
            }

            .nav_links_width {
                width: 33%;
            }
        }

        @media (min-width: 1200px) {
            section:first-child {
                background-image: url(../images/QORA\ -\ HOMEPAGE.png), url(../images/campus.JPG);
                background-size: 80% 100%, 100% 100%;
            }
        }
    </style>
    <title>Quezon City University</title>
</head>

<body>
    <?php
    $beAQcianPath = "./be_a_qcian/";
    $homePagePath = "./";
    $imageLink = "../images/";
    $loginPath = "./login/";
    include('./shared/header.php');
    ?>
    <main>
        <section>
            <div class="container d-flex align-items-end justify-content-end">
                <h1 id="navigation_links" class="fw-bold text-end text-white text-uppercase p-4"><span style="font-size: 150px;" class="years" id="countdown">30</span> <br>years of empowering education from #1 city to global society</h1>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <h2 class="fw-bold py-4 fs-2" style="color: var(--brown);">Nice to see you again, QCian!</h2>
                <div class="d-flex gap-4 flex-wrap justify-content-center">
                    <div class="second_half">
                        <div class="register mb-2">
                            <p class="header text-white text-center p-2">NEW APPLICANT</p>
                            <p class="text-center">Do not have an account yet?</p>
                            <a href="./register/index.php" class="d-block text-white text-decoration-none text-center register_anchor m-3 p-1 rounded-4">REGISTER</a>
                        </div>
                        <div class="login">
                            <p class="text-center text-white header p-2 m-0">LOG IN</p>
                            <form action="./student/enrollment.php" class="p-4 d-flex flex-column" method="post">
                                <input class="form-control mb-2 email" type="email" name="" placeholder="Email">
                                <input class="form-control password" type="password" name="" placeholder="Password">
                                <div class="d-flex forgot_password gap-1 mt-3">
                                    <div class="input-group d-flex gap-1 justify-content-between">
                                        <div>
                                            <input class="me-1" type="checkbox" name="" id="remember"><label for="remember">Remember Me</label>
                                        </div>
                                        <a href="./login/forgot.php" class="text-black">Forgot Password?</a>
                                    </div>
                                </div>
                                <button class="btn login_btn text-white rounded-5 mt-3" type="button" data-bs-toggle="modal" data-bs-target="#consent">LOG IN</button>
                                <!-- Modal -->
                                <div class="modal fade" id="consent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Login as</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This modal is only for simulation and will be removed later.
                                            </div>
                                            <div class="modal-footer d-flex flex-column align-items-end">
                                                <button type="submit" class="btn btn-primary next p-2" style="width: 50%; border: 2px solid var(--main-color);">Login as Student</button>
                                                <a id="cancel_application" href="./registrar/index.php" class="text-decoration-none fw-bold text-center rounded-2 p-2 cancel_application" style="width: 50%; border: 2px solid var(--main-color); background: white; color: var(--main-color);">Login as Registrar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="d-flex gap-5" id="nav_links">
                    <div class="nav_links_width">
                        <h2 class="fw-bold fs-2" style="color: var(--brown);"><i class="fa-solid fa-square-check me-2" style="color: var(--brown); font-size: 40px;"></i>Be a QCIAN!</h2>
                        <p><a href="./be_a_qcian/gap.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> GENERAL ADMISSION POLICY</a></p>
                        <p><a href="./be_a_qcian/sdc.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> SELECTION FOR A DEGREE PROGRAM AND CAMPUS</a></p>
                        <p><a href="./be_a_qcian/gs.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> GRADING SYSTEM</a></p>
                    </div>
                    <div class="nav_links_width">
                        <h2 class="fw-bold fs-2" style="color: var(--brown);"><i class="fa-solid fa-magnifying-glass p-2 rounded-5 me-2" style="color: white; font-size: 20px; border: 2px solid var(--brown); background-color: var(--brown); position: relative; bottom: 7px;"></i>APPLY NOW</h2>
                        <p><a href="./be_a_qcian/far.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> FRESHMEN ADMISSION REQUIREMENTS</a></p>
                        <p><a href="./be_a_qcian/qcucat.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> QCUCAT PROCEDURE</a></p>
                        <p><a href="./be_a_qcian/agc.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> ADMISSIONS GUIDELINES: Classifications</a></p>
                        <p><a href="./be_a_qcian/agq.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> ADMISSIONS GUIDELINES: Qualifications</a></p>
                    </div>
                    <div class="nav_links_width">
                        <h2 class="fw-bold fs-2" style="color: var(--brown);"><img src="../images/QORA-links.png" alt="QORA Links" height="40px" style="position: relative; left: 17px;">ORA Links</h2>
                        <p><a href="./student/enrollment.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);" disabled><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> ONLINE APPOINTMENT</a></p>
                        <p><a href="./be_a_qcian/dpn.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> DATA PRIVACY NOTICE</a></p>
                        <p><a href="./be_a_qcian/pc.php" class="text-decoration-none underline-on-hover" style="color: var(--main-color);"><i class="fa-regular fa-circle-right" style="color: var(--brown); font-size: 20px;"></i> PROGRAM CURRICULUM</a></p>
                    </div>
                </div>
                <h3 class="fs-2 mb-4 motto text-uppercase">equipping youth for the future, qcu offers education and holistic development to prepare you for both career success and a fulfilling life since 1994.</h3>
            </div>
        </section>
    </main>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const countdownSpan = document.getElementById("countdown");
            let count = 1;
            const interval = setInterval(() => {
                countdownSpan.textContent = count + " ";
                count++;
                if (count > 30) {
                    clearInterval(interval);
                }
            }, 25);
        });
    </script>
    <?php
    $beAQcianPath = "./be_a_qcian/";
    $loginPath = "./login/";
    include('./shared/footer.php');
    ?>
    <?php
    $scriptPath = "../";
    include('./shared/script.php');
    ?>
</body>

</html>