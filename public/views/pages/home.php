<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>



<div>
    <img src="<?= img_url('banner2.png') ?>"  style="height: 50%;">
</div>
    
<?php var_dump($formhtml); ?>
<p>
    <?= $data ?>
</p>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>