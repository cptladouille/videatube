<?php $title = 'Inscription';
ob_start(); ?>
<html>
<div class="container">
    <div class="row">
        <div class="col-lg-8 formulaire">
            <div>
                <h1>INSCRIVEZ VOUS!</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 firstColonne">
                    <form method="post" action="action.php">
                        <div>
                            <label class="lab" for="Nom">Nom :</label>
                        </div>
                        <div>
                            <input type="text" name="nom" class="form-control formulaireInput2" placeholder="Nom"/>
                        </div>
                        <br>
                        <div>
                            <label class="lab" for="Prenom">Prenom :</label>
                        </div>
                        <div>
                            <input type="text" name="prenom" class="form-control formulaireInput2" placeholder="Prenom"/>
                        </div>
                        <br>
                        <div>
                            <label class="lab" for="Mail">Mail :</label>
                        </div>
                        <div>
                            <input type="text" name="mail" class="form-control formulaireInputMail" placeholder="Mail"/>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col-lg-4 secondColonne">
                    <form method="post" action="action.php">
                        <div>
                            <label class="lab" for="Login">Login :</label>
                        </div>
                        <div>
                            <input type="text" name="login" class="form-control formulaireInput2" placeholder="Login"/>
                        </div>
                        <br>
                        <div>
                            <label class="labMdp" for="MotDePasse">Mot de Passe :</label>
                        </div>
                        <div>
                            <input type="password" name="motDePasse" class="form-control formulaireInputMdp" placeholder="Mot de Passe"/>
                        </div>
                        <br>
                        <div>
                            <label class="lab" for="Pseudo">Pseudo :</label>
                        </div>
                        <div>
                            <input type="text" name="pseudo" class="form-control formulaireInput2" placeholder="Pseudo"/>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <button type="button" class="btn BoutonForm" value="S'inscrire">S'inscrire</button>
            </div>
        </div>
    </div>
</div>

</html>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
