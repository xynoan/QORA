<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../../style.css";
    $shortcutIconLink = "../../images/";
    include('../shared/link.php');
    ?>
    <title>Quezon City University - Log in</title>
    <style>
        #main-container {
            margin-top: 175px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
        }

        #signin {
            background-color: var(--main-color);
            width: 100%;
        }

        #signin:hover {
            background-color: black;
            transition: background-color 0.5s;
        }
    </style>
</head>

<body>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $homePagePath = "../";
    $imageLink = "../../images/";
    $loginPath = "./";
    include('../shared/header.php');
    ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="text-center mb-3">Log in</h1>
            <form action="../student/enrollment.php" method="post">
                <input class="d-block form-control mb-3" type="text" name="" id="" placeholder="Email">
                <input class="d-block form-control mb-3" type="password" name="" id="" placeholder="Password">
                <div class="mb-3">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Remember me</label>
                    <a href="./forgot.php" class="text-black">Forgot Password?</a>
                </div>
                <button id="signin" class="btn d-block mb-3 submit_button text-white" type="submit">Log In</button>
                <p>Don't Have An Account? <a href="../register/index.php" class="text-black">Register</a></p>
                <p class="text-center">OR</p>
                <div id="g_id_onload" data-client_id="773946028665-70hv7ejnlm9fv8muslntjmpiui6sc2uj.apps.googleusercontent.com" data-context="signin" data-ux_mode="popup" data-login_uri="https://localhost:80" data-auto_prompt="false">
                </div>

                <div class="g_id_signin" data-type="standard" data-shape="pill" data-theme="filled_black" data-text="signin_with" data-size="large" data-logo_alignment="left" data-width="300">
                </div>
            </form>
        </div>
    </div>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $loginPath = "./";
    include('../shared/footer.php');
    ?>
    <?php
    $scriptPath = "../../";
    include('../shared/script.php');
    ?>
</body>

</html>