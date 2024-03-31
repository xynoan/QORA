<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
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

        .otp_not_received {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="fs-2 text-center mb-3">OTP Verification</h1>
            <p>Enter the 6 digit verification code that was sent to your email.</p>
            <p class="fw-bold m-0">Enter Verification Code</p>
            <form action="./registered.php" method="post">
                <div id="otp" class="inputs d-flex flex-row my-2"> 
                    <input class="me-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                    <input class="me-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                    <input class="me-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                    <input class="me-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                    <input class="me-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                    <input class="text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
                </div>
                <button id="signin" class="btn d-block mb-3 submit_button text-white" type="submit">Submit</button>
                <p class="otp_not_received m-0">OTP not received? <a href="#" class="text-black">Send Again</a></p>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
</body>

</html>