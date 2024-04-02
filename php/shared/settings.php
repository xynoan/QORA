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
    <title>Quezon City University - Settings</title>
    <style>
        hr.divider {
            width: 100%;
        }

        #main-container {
            margin-top: 170px;
            margin-bottom: 50px;
        }

        #content-form {
            border-radius: 30px;
            border: 2px solid var(--main-color);
        }

        .navbar-brand {
            width: 821px;
        }

        .square {
            height: 250px;
            width: 250px;
            border-radius: 5%;
        }

        .fa-cloud-arrow-up {
            cursor: pointer;
        }

        .fa-cloud-arrow-up:hover {
            opacity: 1 !important;
            transition: opacity 0.5s;
        }

        #submitImage {
            background-color: var(--main-color);
            width: 150px;
        }

        #submitImage:hover {
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
    include('../shared/account.php');
    ?>
    <div class="container" id="main-container">
        <div id="content-form" class="p-4 mt-3">
            <?php include('../shared/logoutModal.php') ?>
            <h1 class="mt-3 fs-3">PROFILE</h1>
            <p>Update your photo and password here.</p>
            <hr class="divider">
            <div class="d-flex gap-4">
                <img src="../../images/iu.jpg" alt="IU" height="100px" class="rounded-4" style="border: 2px solid var(--main-color);">
                <div>
                    <p class="fw-bold fs-5">Profile Picture</p>
                    <a href="#" class="text-decoration-none text-white p-2 rounded-3" style="background: var(--main-color);"><i class="fa-solid fa-upload"></i> Upload Image</a>
                    <a href="#" class="text-decoration-none text-black border border-black p-2 rounded-3"><i class="fa-solid fa-trash-can"></i> Remove</a>
                    <p class="mt-2">We support PNGs, JPEGs and GIFs under 100MB</p>
                </div>
            </div>
            <div class="d-flex gap-4 mb-3" style="width: 65%;">
                <div class="input-group d-flex flex-column">
                    <p class="fw-bold m-0">Full Name:</p>
                    <input type="text" class="form-control" style="width: 100%;" disabled>
                </div>
                <div class="input-group d-flex flex-column">
                    <p class="fw-bold m-0">Email:</p>
                    <input type="text" class="form-control" style="width: 100%;" disabled>
                </div>
            </div>
            <p class="fw-bold">Change Password</p>
            <div class="d-flex gap-4">
                <div style="width: 50%;">
                    <div class="input-group d-flex align-items-center">
                        <label for="oldPassword" class="me-2">Old Password: </label>
                        <input type="password" name="" id="oldPassword" class="form-control">
                    </div>
                    <div class="input-group d-flex align-items-center">
                        <label for="oldPassword" class="me-2">New Password: </label>
                        <input type="password" name="" id="oldPassword" class="form-control">
                    </div>
                    <div class="input-group d-flex align-items-center">
                        <label for="oldPassword" class="me-2">Confirm New Password: </label>
                        <input type="password" name="" id="oldPassword" class="form-control">
                    </div>
                </div>
                <a href="" class="text-black">Forgot Password</a>
            </div>
            <div class="mt-4 d-flex gap-3 justify-content-end">
                <a href="#" onclick="toggleSave()" class="text-decoration-none text-white p-3 rounded-4" style="background-color: var(--main-color);" id="save">Save Changes</a>
                <a href="../index.php" class="cancel text-decoration-none border border-black p-3 rounded-4 text-black">Cancel</a>
            </div>
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