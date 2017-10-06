<h1>APP 1</h1>

<?php
try
{
    $pdo = new PDO('mysql:host=esgi-db-1;dbname=esgi;port=3306', 'root', 'root');
    echo "Connexion à la bdd OK";
}
catch (Exception $e)
{
	echo "bla";
    die('Erreur : ' . $e->getMessage());
}