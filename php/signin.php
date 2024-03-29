<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../html/link.html') ?>
    <title>Quezon City University - Sign in</title>
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
            background-color: var(--footer-color);
            width: 100%;
        }
    </style>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="text-center mb-3">Sign in</h1>
            <form action="./enrollment.php" method="post">
                <input class="d-block form-control mb-3" type="text" name="" id="" placeholder="Email">
                <input class="d-block form-control mb-3" type="password" name="" id="" placeholder="Password">
                <div class="mb-3">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Remember me</label>
                    <a href="#" class="text-black">Forgot Password?</a>
                </div>
                <button id="signin" class="btn d-block text-white mb-3" type="submit">Sign In</button>
                <p>Don't Have An Account? <a href="./register.php" class="text-black">Register</a></p>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html') ?>
</body>

</html>