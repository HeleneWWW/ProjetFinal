<?php

//---------------------------------------------------------------------------------------//
//--------------------formulaire pour AJOUTER un site------------------------------------//
//---------------------------------------------------------------------------------------// 

?>


<?php ob_start(); ?>

<div class="container">

    <h1>Ajouter un site</h1>
        <hr/>
    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>

</div>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>