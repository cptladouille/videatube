<?php $title = 'Connexion';
ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 formulaire">
            <h1>CONNECTEZ VOUS !</h1>
            <form method="post" action="action.php">
                <div class="formulaireChamps">
                    <label for="Login">Login :</label>
                </div>
                <div>
                    <input type="text" class="form-control formulaireInput" name="login" placeholder="Login"/>
                </div>
                <br>
                <div class="formulaireChamps">
                    <label for="MotDePasse">Mot de Passe :</label>
                </div>
                <div>
                    <input type="password" class="form-control formulaireInput" name="mdp" placeholder="Mot de passe"/>
                </div>
                <br>
                <div>
                    <button type="button" class="btn" value="Se connecter">Se connecter</button>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn" formaction='inscription'>S'inscrire</button>
                </div>
            </form>

        </div>
    </div>

</div>


<?php $content = ob_get_clean();
require_once('view/template.php'); ?>

