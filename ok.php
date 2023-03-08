<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ok</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="site-container">
        <?php include('./header.php'); ?>
        <div>
            <h1> Vielen Dank für Ihre Anmeldung. </h1>
            <p> Bitte klicken Sie auf den Link in der Bestätigungs-Mail. </p>
        </div>
        <section>
            <ul class="process-list">
                <li class="process-item opacity-50"><img class="process-image" src="img/process-1.png" alt="process-1">
                    <p class="process-text">Formular
                        ausfüllen</p>
                </li>
                <li class="process-item">
                    <div class="process-divider">
                    </div>
                </li>
                <li class="process-item"><img class="process-image" src="img/process-2.png" alt="process-2">
                    <p class="process-text">Bestätigungs-Mail
                        erhalten</p>
                </li>
                <li class="process-item">
                    <div class="process-divider">
                    </div>
                </li>
                <li class="process-item"><img class="process-image" src="img/process-3.png" alt="process-3">
                    <p class="process-text">Klick auf
                        Link</p>
                </li>
                <li class="process-item opacity-50">
                    <div class="process-divider">
                    </div>
                </li>
                <li class="process-item opacity-50"><img class="process-image" src="img/process-4.png" alt="process-4">
                    <p class="process-text">Anmeldung
                        erfolgreich</p>
                </li>
            </ul>
        </section>
        <!-- Redirect to Home after 20 Seconds -->
        <script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 20000);
        </script>
        <?php include('./footer.php'); ?>
    </div>
</body>

</html>