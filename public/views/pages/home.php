<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>"  style="height: 50%;">
</div>
    

<p>
    <?= $data ?>
    <div class="grid" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 100 } }'>
  <div class="grid-item"><img src="<?= img_url('bootstrap1.png') ?>"></div>
  <div class="grid-item"><img src="<?= img_url('bootstrap1.png') ?>"></div>
 </div>

</p>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>