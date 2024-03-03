<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="shortcut icon"
        href="https://i0.wp.com/qcu.edu.ph/wp-content/uploads/2021/10/cropped-logo.jpg?fit=1500%2C1500&ssl=1"
        type="image/x-icon">
    <title>Quezon City University - Sign in</title>
</head>

<body>
    <?php include('../html/header.html'); ?>
    <div class="container d-flex justify-content-center align-items-center" id="main-container">
        <div id="content-form" class="p-5">
            <h1 class="text-center mb-3">Sign in</h1>
            <form action="" method="post">
                <input class="d-block form-control mb-3" type="text" name="" id="" placeholder="Email">
                <input class="d-block form-control mb-3" type="password" name="" id="" placeholder="Password">
                <div class="mb-3">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Remember me</label>
                    <a href="#" class="text-black">Forgot Password?</a>
                </div>
                <button id="signin" class="btn d-block text-white mb-3" type="submit">Sign In</button>
                <p>Don't Have An Account? <a href="#" class="text-black">Register</a></p>
            </form>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
    <script src="../init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/877d2cecdc.js" crossorigin="anonymous"></script>
</body>

</html>