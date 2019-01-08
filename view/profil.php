<?php $title = 'Profil';
ob_start(); ?>

    <?php
    // Formulaire d'édition générale de profil
    if(isset($_POST['editUser']))
    { ?>
        <div class="containerProfil col-lg-10 editForm">
            <div class="ChampProfil">
                <form method = "post" action="profil">
                    <div>
                        <label class = "lab" for="nom">Nom :</label>
                        <input type="text" name="nom" class="form-control formulaireInput3" placeholder=" <?= $_SESSION['userConnected']['lastname']; ?>"/>
                    </div>
                    <br>
                    <div>
                        <label class = "lab" for="prenom">Prénom :</label>
                        <input type="text" name="prenom" class="form-control formulaireInput3" placeholder=" <?= $_SESSION['userConnected']['firstname']; ?>"/>
                    </div>
                    <br>
                    <div>
                        <label class = "lab" for="pseudo">Pseudo :</label>
                        <input type="text" name="pseudo" class="form-control formulaireInput3" placeholder=" <?= $_SESSION['userConnected']['nickname']; ?>"/>
                    </div>
                    <br>
                    <div>
                        <label class = "lab" for="mail">Email :</label>
                        <input type="text" name="mail" class="form-control formulaireInput3" placeholder=" <?= $_SESSION['userConnected']['mail']; ?>"/>
                    </div>
                    <br>
                    <div>
                        <label class = "lab" for="avatar">Avatar :<img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar'];?>" width="60" height="60" class="d-inline-block align-top avatar" alt=""></label>
                        <input type="text" name="avatar" class="form-control formulaireInput3" placeholder=" <?= $_SESSION['userConnected']['avatar']; ?>"/>
                    </div>
                    <br>
                    <div class="text-center">
                        <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "validateEditUser" value = 'Accepter les modifications'>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['alert']))
                    { ?>
                        <div class = "alert"><label><?= $_POST['alert']; ?></label></div>
                    <?php
                    } ?>
            </div>
        </div>
    <?php   
    // Formulaire de changement de mot de passe
    }elseif(isset($_POST['editUserPassword']))
    { ?>
        <div class="containerProfil col-lg-10 editForm">
            <div class="ChampProfil">
                <form method = "post" action="profil">
                    <div>
                        <label class = "lab" for="password">Nouveau mot de passe : </label>
                        <input type="text" name="password" class="form-control formulaireInput3"/>
                    </div>
                    <br>
                    <div>
                        <label class = "lab" for="password2">Confirmer le mot de passe : </label>
                        <input type="text" name="password2" class="form-control formulaireInput3"/>
                    </div>
                    <br>
                    <div class="text-center">
                        <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "validateEditPasswordUser" value = 'Changer le mot de passe'>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['alert']))
                    { ?>
                        <div class = "alert"><label><?= $_POST['alert']; ?></label></div>
                    <?php
                    } ?>
            </div>
        </div>
    
    <?php
    // Formulaire d'informations générales de profil
    } else { ?>
        <div class="containerProfil col-lg-10">
            <div class = "row">
                <div class="photoProfil">
                    <?php
                    if($_SESSION['userConnected']['avatar']!='')
                    { ?>
                        <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar'];?>" width="400" height="400" class="avatar" alt="">
                    <?php 
                    } else { ?>
                        <img src=http://image.noelshack.com/fichiers/2019/01/4/1546507376-profile-2092113-12802.png width="400" height="400" class = "avatar">
                    <?php } ?>
                </div>
                <div class="ChampProfil">
                    
                    <label class = "lab" for="nom">Nom : <?= $_SESSION['userConnected']['lastname']; ?></label>
                    <br>
                    <label class = "lab" for="prenom">Prénom : <?= $_SESSION['userConnected']['firstname']; ?></label>
                    <br>
                    <label class = "lab" for="pseudo">Pseudo : <?= $_SESSION['userConnected']['nickname']; ?></label>
                    <br>
                    <label class = "lab" for="mail">Email : <?= $_SESSION['userConnected']['mail']; ?></label>
                    <br>
                    <label class = "lab" for="role">Rôle : <?= $_SESSION['userConnected']['roleLabel']; ?></label>
                    <br>
                    <?php 
                    if(isset($_SESSION['userConnected']['daysAbo']) && $_SESSION['userConnected']['daysAbo']['nbDaysLeft'] > 0)
                    { ?>
                        <label class = "lab" for="statutAbo">Statut abonné : Abonné</label>
                        <br>
                        <label class = "lab" for="jourAbo">Jours d'abonnement restant : <?= $_SESSION['userConnected']['daysAbo']['nbDaysLeft']; ?></label>
                    <?php 
                    }else
                    { ?>
                        <label class = "lab" for="statutAbo">Statut abonné : Non abonné</label>
                        <form method = 'post' action ='subscription'>
                            <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "subscription" value = "S'abonner">
                        </form>
                    <?php
                    } ?>
                </div>
            </div>
            <div class = 'text-center'>
                <h3>Modifier mes informations</h3>
                <form method = "post" action ="profil">
                    <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "editUser" value = 'Modifier mon profil'> 
                </form>
                <br>
                <form method = "post" action ="profil">
                    <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "editUserPassword" value = 'Changer de mot de passe'> 
                </form>
            </div>
        </div>
    <?php } ?>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
