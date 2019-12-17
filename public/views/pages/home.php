<?php ob_start(); ?>



<!-- <div>
    <img class="w-100" src="<?= img_url('banner3.png') ?>"  style="height: 50%;">
</div> -->
    

<!-- Test Affichage Isotope Library -->
<div class="grid">
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2 grid-item--height2">0</div>
  <div class="grid-item grid-item--height3">1</div>
  <div class="grid-item grid-item--height2">2</div>
  <div class="grid-item grid-item--width3">3</div>
  <div class="grid-item">4</div>
  <div class="grid-item">5</div>
  <div class="grid-item grid-item--height2">6</div>
  <div class="grid-item grid-item--width2 grid-item--height3"><img class="w-100" src="<?= img_url('PHP_logo.svg') ?>"  style="height: 100%;">7</div>
  <div class="grid-item">20</div>
  <div class="grid-item grid-item--height2"><img class="w-100" src="<?= img_url('AJAX_logo.svg') ?>"  style="height: 100%;"></div>
  <div class="grid-item"><img class="w-100" src="<?= img_url('dh.png') ?>">21</div>
  <div class="grid-item grid-item--width2 grid-item--height2">9</div>
  <div class="grid-item grid-item--width2">10</div>
  <div class="grid-item">12</div>
  <div class="grid-item grid-item--height2">11</div>
  <div class="grid-item">13</div>
  <div class="grid-item">14</div>
  <div class="grid-item grid-item--height3">15</div>
  <div class="grid-item grid-item--height2"><img class="w-100" src="<?= img_url('CSS_logo.png') ?>"  style="height: 85%;"></div>
  <div class="grid-item">17</div>
  <div class="grid-item">18</div>
  <div class="grid-item grid-item--height2">19</div>
</div>

<!-- FIN DU TEST -->
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>