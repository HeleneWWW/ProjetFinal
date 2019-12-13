<?php ob_start(); ?>

<h1>Apparemment, il semble que nous n'ayons potentiellement rien trouvé...</h1>

<img src="https://media.giphy.com/media/3o7aTskHEUdgCQAXde/giphy.gif"/>


<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>