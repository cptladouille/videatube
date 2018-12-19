<?php $title = 'Inscription';
ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INSCRIVEZ VOUS</title>
</head>
<body>
<h1>INSCRIVEZ VOUS !</h1>
<form method="post" action="action.php">
    <label for="Nom">Nom :</label>
    <input type="text" name="nom" placeholder=" Votre nom"/>
    <br>
    <br>
    <label for="Prenom">Prenom :</label>
    <input type="text" name="prenom" placeholder="Votre prenom"/>
    <br>
    <br>
    <label for="Mail">Mail :</label>
    <input type="text" name="mail" placeholder="Votre mail"/>


    <label for="Login">Login :</label>
    <input type="text" name="login" placeholder=" Choisissez un Login"/>
    <br>
    <br>

    <label for="MotDePasse">Mot de Passe :</label>
    <input type="password" name="mdp" placeholder="Choisissez un mdp"/>
    <br>
    <br>
    <label for="Pseudo">Pseudo :</label>
    <input type="text" name="pseudo" placeholder=" Choisissez un pseudo"/>
    <br>

    <input type="submit" value="S'inscrire" />
</form>
</body>

</html>
<?php $content = ob_get_clean();
require_once ('view/template.php');?>