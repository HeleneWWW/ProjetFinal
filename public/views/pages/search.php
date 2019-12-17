
<?php ob_start(); ?>

<h1>Votre recherche</h1>

<?= var_dump($alert); ?>

<?= var_dump($tag); ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>