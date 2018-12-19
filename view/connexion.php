<<<<<<< Updated upstream
<div class="col-sm-12 container">
        <div class="formulaireTitle">
            <h1>CONNECTEZ VOUS !</h1>
            <div class="col-sm-offset-4 col-sm-4">
                <form method="post" action="action.php">

                    <div class="col-sm-offset-1 col-sm-3 ">
                    <label for="Login">Login :</label>
                    <input type="text" name="login" placeholder="Entrez votre login"/>
                    <br>
                    <br>
                    </div>

                    <div class="col-sm-offset-1 col-sm-3 ">
                    <label for="MotDePasse">Mot de Passe :</label>
                    <input type="password" name="mdp" placeholder="Entrez votre mdp"/>
                    <br>
                    <br>
                    </div>
                    <button type="button" class="btn btn-secondary" value="Se connecter">Se connecter</button>
                </form>
                </div>
        </div>
</div>
=======
<?php $title = 'Connexion';
ob_start(); ?>


<h1>CONNECTEZ VOUS !</h1>
<form method="post" action="action.php">


    <label for="Login">Login :</label>
    <input type="text" name="login" placeholder=" Choisissez un Login"/>
    <br>
    <br>

    <label for="MotDePasse">Mot de Passe :</label>
    <input type="password" name="mdp" placeholder="Choisissez un mdp"/>
    <br>
    <br>

    <input type="submit" value="Se connecter" />

</form>

<?php $content = ob_get_clean();
require_once ('view/template.php');?>
>>>>>>> Stashed changes
