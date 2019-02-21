<div class="row">
    <?php
    if(isset($videosFound))
    {
        if(count($videosFound)>0)
        { 
            for($i = 1;$i<count($videosFound);$i++)
            { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                    <?php if($videosFound[$i]->getThumbnail() == "")
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
        else{ ?>  
            <h1>Aucune vidéo trouvée pour l'argument de recherche : <?= $_POST['search'] ?></h1>
        <?php }
    }else
    { ?>
        <h1>Aucune vidéo trouvée</h1>
    <?php } ?>
    </div>
</div>