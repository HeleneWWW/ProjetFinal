
<?php ob_start(); ?>

<div class="container">

    <h1>Votre recherche</h1>
        <hr/>

    <?= var_dump($alert); ?>

    <?= var_dump($tag); ?>
    
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>