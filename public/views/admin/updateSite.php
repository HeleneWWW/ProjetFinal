<?php

//---------------------------------------------------------------------------------------//
//--------------------formulaire pour UPDATER un site------------------------------------//
//---------------------------------------------------------------------------------------// 

?>


<?php ob_start(); ?>

<h1>Ajouter un site</h1>
<?= $errors; ?>
<!-- formulaire -->
<?= $formulaireHtml; ?>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>