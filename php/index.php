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

        section:first-child {
            background-color: var(--secondary-color);
        }

        section:first-child>div,
        section:nth-child(2)>div {
            height: 100vh;
        }

        .border-primary {
            border-color: #A08048 !important;
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
                <h2 class="fw-bold p-4 fs-2" style="color: var(--brown);">Hello, Future QCian!</h2>
            </div>
        </section>
    </main>
    <?php include('../html/footer.html'); ?>
    <?php include('../html/script.html'); ?>
</body>

</html>