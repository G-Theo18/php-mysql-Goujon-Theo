<!-- index.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        
        <!-- Inclusion de l'entête -->
        <?php include_once('header.php'); ?>
        
        <h1 class="my-4">Nos Recettes</h1>

        <!-- Inclusion des variables et fonctions -->
        <?php
            include_once('variables.php');
            include_once('functions.php');
        ?>

        <!-- Affichage des recettes -->
        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article class="mb-4 p-3 border rounded shadow-sm">
                <h3 class="text-primary"><?php echo htmlspecialchars($recipe['title']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($recipe['recipe'])); ?></p>
                <i class="text-muted">Par : <?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach; ?>

    </div>
    
    <!-- Inclusion du bas de page -->
    <?php include_once('footer.php'); ?>
</body>
</html>
