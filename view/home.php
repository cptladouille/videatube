<?php $title = 'Acceuil';
ob_start(); ?>

<div>
<br>
<br>
<br>
<?echo( $data); ?>

</div>

<?php $content = ob_get_clean();
require_once ('view/template.php');?>