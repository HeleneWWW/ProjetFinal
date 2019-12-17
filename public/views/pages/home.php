<?php ob_start(); ?>



<!-- <div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>"  style="height: 50%;">
</div> -->
    

<p>
    <?= $data ?>
</p>

<!-- Test Affichage Isotope Library -->
<div id="filters" class="button-group">  
  <button class="button">Bouton 1</button>
  <button class="button">Bouton 2</button> 
</div>
<div class="grid">
  <div class="grid-item">
  <img src="<?= img_url('PHP_logo.svg') ?>"><p><span class="nombre">10</span></p></div>

  <div class="grid-item">
  <img src="<?= img_url('HTML_logo.svg') ?>"><p><span class="nombre">2</span></p></div>
  <div class="grid-item">
  <img src="<?= img_url('JS_logo.png') ?>"><p><span class="nombre">1</span></p></div>
  <div class="grid-item">
  <img src="<?= img_url('CSS_logo.png') ?>"><p><span class="nombre">36</span></p></div>
  <div class="grid-item">
  <img src="<?= img_url('SQL_logo.png') ?>"><p><span class="nombre">12</span></p></div>
  <div class="grid-item" >
  <img src="<?= img_url('JQUERY_logo.png') ?>"><p><span class="nombre">24</span></p></div>
  <div class="grid-item" >
  <img src="<?= img_url('AJAX_logo.svg') ?>"><p><span class="nombre">3</span></p></div>

</div>
<!-- FIN DU TEST -->
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>