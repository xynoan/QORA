<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html'); ?>
    <style>
        h1 {
            width: 60%;
        }

        h3.motto {
            color: var(--brown);
            text-align: center;
        }

        section:first-child {
            background-color: var(--secondary-color);
        }

        section:first-child>div {
            height: 110vh;
        }

        .border-primary {
            border-color: #A08048 !important;
        }

        .first_half {
            width: 65%;
        }

        .first_half>.nav_buttons,
        .register>.header,
        .login>.header,
        .register>.register_anchor,
        .login_btn {
            background-color: var(--main-color);
        }

        .first_half>.nav_buttons {
            border-radius: 15px;
            padding-left: 20px !important;
        }

        .second_half {
            width: 25%;
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
    <?php include('../html/header.html'); ?>
    <main>
        <section>
            <div class="container d-flex align-items-end justify-content-end">
                <h1 class="fw-bold text-center text-white text-uppercase p-4">30 years of empowering education from #1 city to global society</h1>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="fw-bold py-4 fs-1" style="color: var(--brown);">Hello, Future QCian!</h2>
                <div class="d-flex gap-5 flex-wrap">
                    <div class="first_half">
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Data Privacy Notice</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">General Admission Policy</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Selection for a degree program and campus</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Freshmen admission requirements</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">QCUCAT procedure</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Admissions Guidelines: Classification</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Admissions Guidelines: Qualification</p>
                        <p class="text-uppercase nav_buttons text-white p-2 mb-2">Program Curriculum</p>
                        <p class="text-uppercase nav_buttons text-white p-2">Grading System</p>
                    </div>
                    <div class="second_half">
                        <div class="register mb-2">
                            <p class="header text-white text-center p-2">NEW APPLICANT</p>
                            <p class="text-center">Do not have an account yet?</p>
                            <p class="text-center register_anchor m-3 p-1 rounded-4"><a href="./register.php" class="text-white text-decoration-none">REGISTER</a></p>
                        </div>
                        <div class="login">
                            <p class="text-center text-white header p-2 m-0">LOG IN</p>
                            <form action="" class="p-4 d-flex flex-column">
                                <input class="form-control mb-2 email" type="email" name="" id="" placeholder="Email">
                                <input class="form-control password" type="password" name="" id="" placeholder="Password">
                                <div class="d-flex forgot_password gap-1 mt-3">
                                    <div class="input-group d-flex align-items-center gap-1">
                                        <input type="checkbox" name="" id="remember"><label for="remember">Remember Me</label>
                                    </div>
                                    <a href="#" class="text-black">Forgot Password?</a>
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
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html'); ?>
</body>

</html>