<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $styleLink = "../../style.css";
    $shortcutIconLink = "../../images/logo-white.png";
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
                <!-- <p class="text-center">OR</p> -->
            </form>
        </div>
    </div>
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