<?php
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'my_recipes';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = 'root';

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=my_recipes;charset=utf8',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );


    $sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = 1';
    $recipesStatement = $db->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $exception) {
    die('Erreur : ' . $exception->getMessage());
}
?>
