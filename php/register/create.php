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
    <title>Quezon City University - Register</title>
    <style>
        #main-container {
            margin-top: 175px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
            width: 450px;
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
    $loginPath = "../login/";
    include('../shared/header.php');
    ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="mb-3 fs-2">Create your Account</h1>
            <p>Create your online account</p>
            <form action="./verification.php" method="post">
                <input class="d-block form-control mb-3" type="email" name="" id="" placeholder="email@gmail.com">
                <input class="d-block form-control mb-3" type="password" name="" id="" placeholder="Password">
                <p class="m-0">Password must contain</p>
                <p style="font-size: 15px;" class="text-success m-0"><i class="fa-regular fa-circle-check"></i> at least 8-25 characters</p>
                <p style="font-size: 15px;" class="text-success m-0"><i class="fa-regular fa-circle-check"></i> at least 1 lowercase letter</p>
                <p style="font-size: 15px;" class="text-success m-0"><i class="fa-regular fa-circle-check"></i> at least 1 uppercase letter</p>
                <p style="font-size: 15px;" class="text-danger m-0"><i class="fa-regular fa-circle-xmark"></i> at least 1 number</p>
                <p style="font-size: 15px;" class="text-success"><i class="fa-regular fa-circle-check"></i> at least 1 special character (! @ # $ % ^ & *)</p>
                <button id="signin" class="btn d-block submit_button text-white" type="submit">Send OTP</button>
            </form>
        </div>
    </div>
    <?php
    $beAQcianPath = "../be_a_qcian/";
    $loginPath = "../login/";
    include('../shared/footer.php');
    ?>
    <?php
    $scriptPath = "../../";
    include('../shared/script.php');
    ?>
</body>

</html>