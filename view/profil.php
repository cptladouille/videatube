<?php $title = 'Profil';
ob_start(); ?>

    <div class="bodyProfil">
        <?php
        // Formulaire d'édition générale de profil
        if (isset($_POST['editUser'])) { ?>
            <div class="containerProfil col-lg-6 editForm">
                <div class="ChampProfilEdit">
                    <form method="post" action="profil">
                        <table>
                            <tr>
                                <td>
                                    <div>
                                        <label class="labProfil" for="nom">Nom :</label>
                                        <input type="text" name="nom" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['lastname']; ?>"/>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label class="labProfil" for="prenom">Prénom :</label>
                                        <input type="text" name="prenom" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['firstname']; ?>"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label class="labProfil" for="pseudo">Pseudo :</label>
                                        <input type="text" name="pseudo" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['nickname']; ?>"/>
                                    </div>
                                <td>
                                    <div>
                                        <label class="labProfil" for="avatar">Avatar :
                                            <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar']; ?>"
                                                 width="100px" height="100px" class="d-inline-block align-top avatar" alt="">
                                        </label>
                                        <input type="text" name="avatar" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['avatar']; ?>"/>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div>
                                        <label class="labProfil" for="mail">Email :</label>
                                        <input type="text" name="mail" class="form-control mailEdit"
                                               placeholder=" <?= $_SESSION['userConnected']['mail']; ?>"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <input class="btn  my-2 my-sm-0  BoutonFormEditProfil" type="submit"
                                               name="validateEditUser"
                                               value='Accepter les modifications'>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if (isset($_POST['alert'])) { ?>
                        <div class="alert"><label><?= $_POST['alert']; ?></label></div>
                        <?php
                    } ?>
                </div>
            </div>
            <?php
            // Formulaire de changement de mot de passe
        } elseif (isset($_POST['editUserPassword'])) { ?>
            <div class="containerProfil col-lg-4 editForm">
                <div class="ChampEditMdp">
                    <form method="post" action="profil">
                        <div>
                            <label class="labProfil" for="password">Nouveau mot de passe : </label>
                            <input type="text" name="password" class="form-control formulaireInput3"/>
                        </div>
                        <br>
                        <div>
                            <label class="labProfil" for="password2">Confirmer le mot de passe : </label>
                            <input type="text" name="password2" class="form-control formulaireInput3"/>
                        </div>
                        <br>
                        <div class="text-center">
                            <input class="btn  my-2 my-sm-0 BoutonFormEditMdp" type="submit"
                                   name="validateEditPasswordUser"
                                   value='Changer le mot de passe'>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['alert'])) { ?>
                        <div class="alert"><label><?= $_POST['alert']; ?></label></div>
                        <?php
                    } ?>
                </div>
            </div>

            <?php
            // Formulaire d'informations générales de profil
        } else { ?>
            <div class="containerProfil col-lg-8">
                <div class="row">
                    <div class="photoProfil">
                        <?php
                        if ($_SESSION['userConnected']['avatar'] != '') { ?>
                            <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar']; ?>" class="avatar"
                                 alt="">
                            <?php
                        } else { ?>
                            <img src=http://image.noelshack.com/fichiers/2019/01/4/1546507376-profile-2092113-12802.png
                                 width="400" height="400" class="avatar">
                        <?php } ?>
                    </div>
                    <div class="ChampProfil">
                        <table>
                            <tbody>
                            <tr>
                                <td><label class="labProfil" for="nom">Nom : </label>
                                    <?= $_SESSION['userConnected']['lastname']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="prenom">Prénom : </label>
                                    <?= $_SESSION['userConnected']['firstname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="pseudo">Pseudo : </label>
                                    <?= $_SESSION['userConnected']['nickname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="mail">Email : </label>
                                    <?= $_SESSION['userConnected']['mail']; ?>
                                </td>
                            </tr>
                            <td>
                                <label class="labProfil" for="role">Rôle : </label>
                                <?= $_SESSION['userConnected']['roleLabel']; ?>
                            </td>
                            <?php
                            if (isset($_SESSION['userConnected']['isSubscribed']) && $_SESSION['userConnected']['isSubscribed'] == true )
                            { ?>
                            <tr>
                                <td>
                                    <label class="labProfil" for="statutAbo">Statut abonné : </label>
                                    Abonné
                                </td>
                                <td>

                                    <label class="labProfil" for="dateAbo">date de fin d'abonnement : </label>
                                    <?= $_SESSION['userConnected']['aboDate']['aboDate'] ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php
                        }else
                        { ?>
                            <tr>
                                <td>
                                    <label class="labProfil" for="statutAbo">Statut abonné : </label>
                                    Non abonné
                                </td>
                            </tr>
                                <tr>
                                <td>
                                    <form method='post' action='subscription'>
                                        <input class="btn  my-2 my-sm-0 BoutonSubscribe" type="submit" name="subscription" value="S'abonner">
                                    </form>
                                </td>
                        </tr>
                            </tbody>
                            </table>
                            <?php
                        } ?>
                    </div>
                </div>
                <div>
                    <form method="post" action="profil">
                        <input class="btn  my-2 my-sm-0  BoutonEditProfil " type="submit" name="editUser"
                               value='Modifier mon profil'>
                    </form>
                    <br>
                    <form method="post" action="profil">
                        <input class="btn  my-2 my-sm-0  BoutonEditPassword" type="submit" name="editUserPassword"
                               value='Changer de mot de passe'>
                    </form>
                </div>
            </div>
        <?php } ?>

    </div>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>