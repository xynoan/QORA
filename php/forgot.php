<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <title>Quezon City University - Forgot Password</title>
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
    </style>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="text-center mb-3">Forgot Password</h1>
            <p>Enter your email for the verification process,
                we will send 6 digits code to your email.</p>
            <form action="./otp.php" method="post">
                <input class="d-block form-control mb-3" type="text" name="" id="" placeholder="Email">
                <button id="signin" class="btn d-block mb-3 submit_button text-white" type="submit">Continue</button>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
</body>

</html>