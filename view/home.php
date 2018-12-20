<?php $title = 'Acceuil';
ob_start(); ?>
<div class='container'>

    <div class = 'row'>
        <div>Vidéos Récentes gratuites :
            <div class='row'>
                <div class = 'col-lg-3 video'>
                    <iframe src=<?= $data[0]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
                <div class = 'col-lg-3 video'>
                    <iframe src=<?= $data[1]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
                <div class = 'col-lg-3 video'>
                    <iframe src=<?= $data[2]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
                <div class = 'col-lg-3 video'>
                    <iframe src=<?= $data[3]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
            </div>
        </div>
    </div>

    <div class = 'row'></div>

    <div class = 'row'>
        <div>Vidéos Récentes monétisées :
            <div class='row'>
                <div class = 'col-lg-3 video purchasable locked'>
                    <iframe src=<?= $data[0]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen z-index='1'></iframe>
                    <button position = 'absolute' z-index = '2' height='100' width='200'></button>
                </div>
                <div class = 'col-lg-3 video purchasable locked'>
                    <iframe src=<?= $data[1]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
                <div class = 'col-lg-3 video purchasable locked'>
                    <iframe src=<?= $data[2]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
                <div class = 'col-lg-3 video purchasable locked'>
                    <iframe src=<?= $data[3]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </object>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $content = ob_get_clean();
require_once ('view/template.php');?>