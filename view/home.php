<?php $title = 'Acceuil';
ob_start(); ?>
<div>Vidéos Récentes
    <div class="col-sm-offset-4 col-sm-4">
    <iframe width="560" height="315" src=<?= $data[0]?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</object>
    </div>
    
</div>
<?php $content = ob_get_clean();
require_once ('view/template.php');?>