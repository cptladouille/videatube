<?php ob_start(); ?>
<div>

<p>Thèmes populaires :</p>

</div>
<?php $content = ob_get_clean();
require_once ('view/template.php');?>