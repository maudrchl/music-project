<?php
// Salt
define('SALT', 'AUYB28 3:a"ç');

// Connexion variables
define('DB_HOST', 'localhost');
define('DB_PORT', '8888');
define('DB_NAME', 'music');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try
{
    $pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $e)
{
    die('Couldn\'t connect');
}