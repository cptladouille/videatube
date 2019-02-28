<div class ="row">
<?php
        if(count($videosFound)>0)
        {
            for($i = 0;$i<count($videosFound);$i++)
            { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php
                         if($videosFound[$i]->getThumbnail() == "")
                        { ?>
                            <a href="video-<?= $videosFound[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/default.svg" alt=""></a>
                            <?php
                        }else
                        { ?>
                            <a href="video-<?= $videosFound[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/thumb/<?= $videosFound[$i]->getThumbnail(); ?>" alt=""></a>
                            <?php
                        } ?>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="video-<?= $videosFound[$i]->getId(); ?>" class="titreVideo"><?= $videosFound[$i]->getTitle(); ?></a>
                            </h4>
                            <?php if($videosFound[$i]->getPrice() == 0){ ?>
                                <h5>Gratuit</h5>
                            <?php }else{ ?>
                                <h5><?= $videosFound[$i]->getPrice(); ?>€</h5>
                            <?php } ?>
                            <p class="card-text"><?= $videosFound[$i]->getDescription(); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $videosFound[$i]->getNbViews(); ?> vues</small>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        else
        { ?>
            <div class = "row linear-wipe-background">
                <h3 class = "linear-wipe col-lg-12">Aucune vidéo trouvée !!</h3>
                <br>
                <h3 class = "linear-wipe col-lg-12">Voici la liste des dernières vidéos gratuites !</h3>
            </div>
            <div class = "row">
            <?php
            for($i = 1;$i<count($freeVideos);$i++)
            { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if($freeVideos[$i]->getThumbnail() == "")
                        { ?>
                            <a href="video-<?= $freeVideos[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/default.svg" alt=""></a>
                            <?php
                        }else
                        { ?>
                            <a href="video-<?= $freeVideos[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/thumb/<?= $freeVideos[$i]->getThumbnail(); ?>" alt=""></a>
                            <?php
                        } ?>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="video-<?= $freeVideos[$i]->getId(); ?>" class="titreVideo"><?= $freeVideos[$i]->getTitle(); ?></a>
                            </h4>
                            <?php if($freeVideos[$i]->getPrice() == 0){ ?>
                                <h5>Gratuit</h5>
                            <?php }else{ ?>
                                <h5><?= $freeVideos[$i]->getPrice(); ?>€</h5>
                            <?php } ?>
                            <p class="card-text"><?= $freeVideos[$i]->getDescription(); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $freeVideos[$i]->getNbViews(); ?> vues</small>
                        </div>
                    </div>
                </div>
                <?php
            } 
            ?>
            </div>
            <?php
        }
        ?>
</div>