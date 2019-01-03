<?php $title = 'Connexion';
ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="formulaire">
            <h1>CONNECTEZ VOUS !</h1>
            <form method="post" action="connexion">
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
                <?php 
                    if(isset($_POST['alert']))
                    {?>
                        <div class = "alert"><label><?= $_POST['alert']?></label></div>
                    <?php 
                    }
                    elseif (isset($_POST['connect']))
                    {?>
                        <div class = "alert"><label><?= $_POST['connect']?></label></div>
                    <?php
                    }
                ?>
                <br>
                <div>
                    <input type="submit" class="btn BoutonForm" value="Se connecter" name="formConnexion">
                </div>
                <br>
            </form>
            <form action="inscription">
                <input type="submit" class="btn BoutonFormInscription" formaction='inscription' value="S'inscrire"/>
            </form>
        </div>

    </div>
</div>


<?php $content = ob_get_clean();
require_once('view/template.php'); ?>

