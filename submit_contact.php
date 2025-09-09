<!-- submit_contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation - Site de recettes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>

        <h1>Message bien reçu !</h1>

        <?php
        $email = $_POST['email'] ?? $_GET['email'] ?? '';
        $message = $_POST['message'] ?? $_GET['message'] ?? '';
        ?>

        <?php if ($email && $message) : ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo nl2br(htmlspecialchars($message)); ?></p>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning mt-4">
                Aucun message reçu. Veuillez remplir le formulaire avant d'accéder à cette page.
            </div>
        <?php endif; ?>

    </div>

    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>
