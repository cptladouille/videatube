<?php

function connectBdd()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_videatube;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

/*$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

echo '<ul>';
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();*/

function getUser()
{
    $bdd = connectBdd ();
    $req = $bdd->prepare('SELECT firstname FROM user WHERE id = 0');
    $req->execute();
    $data = $req->fetch();
    return $data;
}
?>