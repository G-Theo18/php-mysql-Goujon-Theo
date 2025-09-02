<?php

function isValidRecipe(array $recipe) {
    if (array_key_exists('is_enabled', $recipe)) {
        return $recipe['is_enabled'];
    }
    if (array_key_exists('enabled', $recipe)) {
        return $recipe['enabled'];
    }
    return false;
}

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
    [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Sushis',
        'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 40,
    ],
];

function getRecipes(array $recipes) {
    $validRecipes = [];
    foreach ($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}

function displayAuthor($authorEmail, array $users) {
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . ' (' . $user['age'] . ' ans)';
        }
    }
    return "Auteur inconnu";
}
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
        <?php foreach (getRecipes($recipes) as $recipe): ?>
            <li>
                <strong><u><?= $recipe['title']; ?></u></strong><br>
                Auteur : <?= displayAuthor($recipe['author'], $users); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
