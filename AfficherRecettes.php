<?php

$recipes = [
    [
        'title'   => 'Cassoulet',
        'recipe'  => '',
        'author'  => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ],
    [
        'title'   => 'Couscous',
        'recipe'  => '',
        'author'  => 'mickael.andrieu@exemple.com',
        'enabled' => false,
    ],
    [
        'title'   => 'Escalope milanaise',
        'recipe'  => '',
        'author'  => 'mathieu.nebra@exemple.com',
        'enabled' => true,
    ],
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Liste des recettes disponibles</h1>
    <ul>
        <?php foreach ($recipes as $recipe): ?>
            <?php if ($recipe['enabled']): ?>
                <li>
                    <strong><u><?= $recipe['title']; ?></u></strong><br>
                    Auteur : <?= $recipe['author']; ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
