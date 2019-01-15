<?php $title = 'Vidéos';
ob_start(); 
if (isset($_POST['watch'])) 
{ ?>
    <div class = videoWatch>
        <iframe width="100%" height="100%"
        src= <?= $v->getLink(); ?>  allowfullscreen>
        </iframe>
    </div>
        <div class = "footerVideo"></div>
        <div class = "commentaryInputZone"></div>
        <div class = "commentaryZone"></div>

<?php }elseif(isset($_POST['purchase'])){ ?>


<?php } ?>



<?php $content = ob_get_clean();
require_once ('view/template.php');?>