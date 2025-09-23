<?php
require_once 'mysql.php';
require_once 'functions.php';

if (isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $recipe = trim($_POST['recipe']);
    $author = trim($_POST['author']);

    if (!empty($title) && !empty($recipe) && !empty($author)) {
        ajouterRecette($title, $recipe, $author, $db);
        echo "Recette ajoutée !";
    } else {
        echo "Tous les champs doivent êtres completés.";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="title" placeholder="Titre de la recette" required>
    <textarea name="recipe" placeholder="Description de la recette" required></textarea>
    <input type="text" name="author" placeholder="Auteur (email)" required>
    <input type="submit" name="submit" value="Ajouter la recette">
</form>
