<?php $title = 'Inscription';
ob_start(); ?>


<html>
<div class="container">
    <div class="row">
        <div class="col-lg-6 formulaireInscription">
            <div>
                <h1 class="titleInscription">Mettre en ligne une video</h1>
            </div>
            <div class="row justify-content-md-center">
                <form method="post" action="upload">
                    <table>
                        <tr>
                            <td>    
                                <div>
                                    <label class="lab" for="Titre">Titre :</label>
                                </div>
                                <div>
                                    <input type="text" name="title" class="form-control" placeholder="Titre"/>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label class="lab" for="Description">Description :</label>
                                </div>

                                <div>
                                    <input type="text" name="description" class="form-control" placeholder="Description"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label class="lab" for="Url">Url :</label>
                                </div>

                                <div>
                                    <input type="text" name="url" class="form-control inscriptionInputMail"
                                           placeholder="Url"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label class="lab" for="Pseudo">Pseudo :</label>
                                </div>
                                <div>
                                    <input type="text" name="pseudo" class="form-control litle input "
                                           placeholder="Pseudo"/>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label class="lab" for="Login">Login :</label>
                                </div>
                                <div>
                                    <input type="text" name="login" class="form-control " placeholder="Login"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="colonneMdp" >
                                <div>
                                    <label class="lab" for="MotDePasse">Mot de Passe :</label>
                                </div>
                                <div>
                                    <input type="password" name="motDePasse" class="form-control inscriptionInputMdp " placeholder="Mot de Passe"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label class="lab" for="avatar">Avatar : <a href="https://www.casimages.com/">herbege-le
                                        ici et colle nous le lien !</a></label>
                                </div>
                                <div>
                                    <input type="text" name="avatar" class="form-control avatarInscription " placeholder="Avatar"/>
                                </div>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="row justify-content-md-center">
                <input type="submit" class="btn BoutonInscriptionForm" value="S'inscrire" name="formInscription"/>
            </div>
            </form>

        </div>
    </div>
</div>

</html>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>