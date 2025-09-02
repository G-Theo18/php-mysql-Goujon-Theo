<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Inclusion de l'entête -->
    <?php include_once('header.php'); ?>

    <!-- Contenu principal -->
    <main class="container my-5">
        <h1 class="text-center mb-4">Comment nous contacter</h1>

        <form action="contact.php" method="post" class="mx-auto" style="max-width:600px;">
            <div class="mb-3">
                <label for="email" class="form-label">Votre Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@email.com" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Votre Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </main>

    <!-- Inclusion du bas de page -->
    <?php include_once('footer.php'); ?>
    
</body>
</html>
