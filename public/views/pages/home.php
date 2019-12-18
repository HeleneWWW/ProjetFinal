<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('finalbanner.png') ?>">
</div>
<!-- Saut de ligne  -->
<br>    

<!-- Affichage Masonry Library -->
<div class="grid">
  <div class="grid-sizer">
  <div class="grid-item grid-item--width2 grid-item--height2"><img class="w-50" src="<?= img_url('AJAX_logo.svg') ?>"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"><img class="w-25" src="<?= img_url('HTML_logo.svg') ?>"></div>
  <div class="grid-item grid-item--width3 grid-item--height3"><img class="w-50" src="<?= img_url('CSS_logo.png') ?>"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"><img class="w-50" src="<?= img_url('SQL_logo.png') ?>"></div>
  <div class="grid-item grid-item--width4 grid-item--height4"><img class="w-25" src="<?= img_url('JS_logo.png') ?>"></div>
  <div class="grid-item grid-item--width4 grid-item--height4"><img class="w-50" src="<?= img_url('PHP_logo.svg') ?>"></div>
  <div class="grid-item grid-item--width4 grid-item--height4"><img class="w-50" src="<?= img_url('JQUERY_logo.png') ?>"></div></div>

 </div>

<!-- FIN DU TEST -->
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>