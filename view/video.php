<?php $title = 'Vidéos';
ob_start();
if (isset($_POST['watch'])) 
{ ?>


<?php }elseif(isset($_POST['purchase'])){ ?>


<?php } ?>

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

                <div class="card mt-4 videoContain">
                    <iframe class="videoWatch" width="700" height="490" src=<?= $v->getLink(); ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h3 class="card-title">Product Name</h3>
                        <h4>$24.99</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        4.0 stars
                    </div>
                </div>
                <!-- /.card -->

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



<?php $content = ob_get_clean();
require_once ('view/template.php');?>