<?php $title = 'Vidéos';
ob_start(); ?>

<body class="bodyVideo">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <h1 class="my-4 titleTheme">VideaTube</h1>
                <div class="list-group">
                    <a href="home" class="list-group-item">Home</a>
                    <a href="theme-1" class="list-group-item">Action</a>
                    <a href="theme-2" class="list-group-item">Aventure</a>
                    <a href="theme-3" class="list-group-item">Beauté</a>
                    <a href="theme-4" class="list-group-item">Animaux</a>
                    <a href="theme-5" class="list-group-item">Cuisine</a>
                    <a href="theme-6" class="list-group-item">Tuto</a>
                    <a href="theme-0" class="list-group-item">Voir tous les thèmes</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
    <div class="col-lg-9">
                <!-- /.card -->
<?php 
if (isset($_POST['watch'])) 
{   
    
    if(substr_count($v->getLink(),"http") > 0)
    {?>
            <div class="card mt-4 videoContain">
                <iframe class="videoWatch" width="700" height="490" src=<?= $v->getLink(); ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h3 class="card-title"><?= $v->getTitle(); ?></h3>
                    <p class="card-text"><?= $v->getDescription(); ?></p>
                    <span class="text-warning"><?= $v->getNbViews(); ?> vues</span>
                </div>
            </div>

    <?php }
    else {
         ?>
        
            <div class="card mt-4 videoContain">
            <video class="videoWatch" width="700" height="490" controls src="./ressources/videos/<?= $v->getLink(); ?>"></video>
                <div class="card-body">
                    <h3 class="card-title"><?= $v->getTitle(); ?></h3>
                    <p class="card-text"><?= $v->getDescription(); ?></p>
                    <span class="text-warning"><?= $v->getNbViews(); ?> vues</span>
                </div>
            </div>
    <?php } 
}elseif(isset($_POST['purchase'])){ ?>

            <div class="card mt-4 videoContain">    
                <div class = "frame">
                    <div class="frameLock">
                        <?php if(isset($_SESSION['userConnected'])) 
                        { ?>
                            <form method = 'post' action ='purchase'>
                                <input type="hidden" name = "purchaseVid" value = "<?= $v->getId(); ?>" >
                                <input class="btn  btnPurchase" type="submit" name = "purchase" value = 'Acheter'>
                            </form>
                        <?php 
                        }else
                        { ?>
                            <form method = 'post' action ='connexion'>
                                <input class="btn  btnPurchase" type="submit" name = "connexion" value = 'Connexion'>
                            </form>
                        <?php 
                        } ?>
                    </div>
                    <?php 
                    if(substr_count($v->getLink(),"http") > 0)
                    { ?>
                        <iframe class="videoWatch" width="700" height="490" src=<?= $v->getLink(); ?> frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php 
                    }else
                    { ?>
                        <video class="videoWatch" width="700" height="490" controls src="./ressources/videos/<?= $v->getLink(); ?>"></video>
                    <?php 
                    } ?>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= $v->getTitle(); ?></h3>
                    <h4><?= $v->getPrice(); ?>€</h4>
                    <p class="card-text"><?= $v->getDescription(); ?></p>
                    <span class="text-warning"><?= $v->getNbViews(); ?> vues</span>
                </div>
            </div>
        <?php } ?>

                <div class="card card-outline-secondary my-4 btnComm">
                    <div class="card-header">
                        Product Reviews
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Leave a Review</a>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
</body>


<?php $content = ob_get_clean();
require_once ('view/template.php');?>