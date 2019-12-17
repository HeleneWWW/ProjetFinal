<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>"  style="height: 50%;">
</div>
    

<p>
    <?= $data ?>
</p>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>