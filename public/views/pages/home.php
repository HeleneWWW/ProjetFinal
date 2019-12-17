<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>"  style="height: 50%;">
</div>
    

<p>
    <?= $data ?>
    <div class="grid">
  <div class="grid-item"><img src="<?= img_url('bootstrap1.png') ?>"  style="height: 50%;"></div>
  <div class="grid-item grid-item--width2"><img src="<?= img_url('bootstrap1.png') ?>"  style="height: 50%;"></div>
  <div class="grid-item">...</div>
  ...
</div>
</p>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>