<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../style.css";
    $shortcutIconLink = "../images/logo-white.png";
    include('./shared/link.php');
    ?>
    <style>
        h1 {
            width: 60%;
        }

        h3.motto {
            color: var(--brown);
            text-align: center;
        }

        section:first-child {
            background-image: url(../images/QORA\ -\ HOMEPAGE.png), url(../images/campus.JPG);
            background-position: 0% 150%, 0% 10%;
            background-size: 1200px 600px, 1400px 1000px;
            background-repeat: no-repeat;
        }

        section:first-child>div {
            height: 100vh;
        }

        .first_half {
            width: 60%;
        }

        .second_half {
            width: 35%;
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

        .login {
            height: 270px;
        }

        .register,
        .login {
            border: 2px solid var(--main-color);
            border-radius: 18px;
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
                <h1 id="navigation_links" class="fw-bold text-center text-white text-uppercase p-4">30 years of empowering education from #1 city to global society</h1>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="fw-bold py-4 fs-1" style="color: var(--brown);">Hello, Future QCian!</h2>
                <div class="d-flex gap-4 flex-wrap">
                    <div class="first_half">
                        <a href="./be_a_qcian/dpn.php" id="dpn" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Data Privacy Notice</a>
                        <a href="./be_a_qcian/gap.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">General Admission Policy</a>
                        <a href="./be_a_qcian/sdc.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Selection for a degree program and campus</a>
                        <a href="./be_a_qcian/far.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Freshmen admission requirements</a>
                        <a href="./be_a_qcian/qcucat.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">QCUCAT procedure</a>
                        <a href="./be_a_qcian/agc.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Admissions Guidelines: Classification</a>
                        <a href="./be_a_qcian/agq.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Admissions Guidelines: Qualification</a>
                        <a href="./be_a_qcian/pc.php" class="text-uppercase nav_buttons text-white p-2 mb-2 text-decoration-none">Program Curriculum</a>
                        <a href="./be_a_qcian/gs.php" class="text-uppercase nav_buttons text-white p-2 text-decoration-none">Grading System</a>
                    </div>
                    <div class="second_half">
                        <div class="register mb-2">
                            <p class="header text-white text-center p-2">NEW APPLICANT</p>
                            <p class="text-center">Do not have an account yet?</p>
                            <a href="./register/index.php" class="d-block text-white text-decoration-none text-center register_anchor m-3 p-1 rounded-4">REGISTER</a>
                        </div>
                        <div class="login">
                            <p class="text-center text-white header p-2 m-0">LOG IN</p>
                            <form action="./student/enrollment.php" class="p-4 d-flex flex-column">
                                <input class="form-control mb-2 email" type="email" name="" id="" placeholder="Email">
                                <input class="form-control password" type="password" name="" id="" placeholder="Password">
                                <div class="d-flex forgot_password gap-1 mt-3">
                                    <div class="input-group d-flex gap-1 justify-content-between">
                                        <div>
                                            <input class="me-1" type="checkbox" name="" id="remember"><label for="remember">Remember Me</label>
                                        </div>
                                        <a href="#" class="text-black">Forgot Password?</a>
                                    </div>
                                </div>
                                <button class="btn login_btn text-white rounded-5 mt-3" type="submit">LOG IN</button>
                            </form>
                        </div>
                    </div>
                </div>
                <h3 class="fs-2 my-4 motto text-uppercase">equipping youth for the future, qcu offers education and holistic development to prepare you for both career success and a fulfilling life since 1994.</h3>
            </div>
        </section>
    </main>
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