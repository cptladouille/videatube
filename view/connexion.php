<?php $title = 'Connexion';
ob_start();?>
<div class="container">
    <div class="row">
        <div class="formulaire">
            <h1>CONNECTEZ VOUS !</h1>
            <div class="containImgFormConnexion">
            <img  class="imgFormConnexion" src="./ressources/Logo_v_p.png">
            </div>
            <form method="post" action="connexion">
                <div class="formulaireChamps ">
                    <label class="labelFormConnexion labLogin " for="Login">Login :</label>
                </div>
                <div class = "row">
                    <input type="text" class="form-control formulaireInput" name="login" placeholder="Login"/>
                </div>
                <br>
                <div class="formulaireChamps">
                    <label class="labelFormConnexion" for="MotDePasse">Mot de Passe :</label>
                </div>
                <div>
                    <input type="password" class="form-control formulaireInput" name="mdp" placeholder="Mot de passe"/>
                </div>
                <?php 
                    if(isset($_SESSION['userConnected']))
                    {?>
                        <div class = "alert"><label><?= 'Vous etes connecté en tant que '. $_SESSION['userConnected']['nickname'] .' !' ?></label></div>
                    <?php 
                    }
                    elseif (isset($_POST['alert']))
                    {?>
                        <div class = "alert"><label><?= $_POST['alert']?></label></div>
                    <?php
                    }
                ?>

                <a class = "linkFormConnexion" href="">Mot de passe oublié ?</a>
                <br>
                <a class = "linkFormConnexion" href="">Login oublié ?</a>
                <div>
                    <input type="submit" class="btn BoutonForm" value="Se connecter" name="formConnexion">
                </div>
            </form>
            <form action="inscription">
                <input type="submit" class="btn BoutonFormInscription" formaction='inscription' value="S'inscrire"/>
            </form>
        </div>

    </div>
</div>
<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
