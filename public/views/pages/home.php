<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>">
</div>
    

<!-- Test Affichage Isotope Library -->
<div class="grid">
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div>
  <div class="grid-item grid-item--height3"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--width3"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--width2 grid-item--height3"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--width2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--height2"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item"><img src="<?= img_url('PHP_logo.svg') ?>"></div></div>
  <div class="grid-item grid-item--height3"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
</div>

<!-- FIN DU TEST -->
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>