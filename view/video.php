<?php $title = 'Vidéos';
ob_start(); 
if (isset($_POST['watch'])) 
{ ?>


<?php }elseif(isset['purchase']){ ?>


<?php } ?>



<?php $content = ob_get_clean();
require_once ('view/template.php');?>