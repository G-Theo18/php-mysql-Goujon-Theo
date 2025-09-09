<!-- submit_contact.php -->
<?php
if (
    !isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||
    !isset($_POST['message']) || empty(trim($_POST['message']))
) {
    echo '<h1>Il faut un email et un message valides pour soumettre le formulaire.</h1>';
    return;
}

$email = htmlentities($_POST['email'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$message = htmlentities(trim($_POST['message']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

$screenshotMessage = '';
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $filename = basename($_FILES['screenshot']['name']);
    $targetFile = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $targetFile)) {
        $screenshotMessage = "Fichier uploadé avec succès : " . htmlentities($filename, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    } else {
        $screenshotMessage = "Erreur lors de l'upload du fichier.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Confirmation</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">

<div class="container">

    <!-- Inclusion de l'entête du site -->
    <?php include_once('header.php'); ?>

    <!-- Message de confirmation -->
    <h1>Message bien reçu !</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo $email; ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $message; ?></p>
            <?php if ($screenshotMessage): ?>
                <p class="card-text"><b><?php echo $screenshotMessage; ?></b></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>

</div>

</body>
</html>
