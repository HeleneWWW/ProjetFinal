<?php ob_start(); ?>

<div class="container">

    
       
        <?php if (!$formValid): ?>
<h1>C'est par là pour t'inscrire :</h1> <hr/>
<?= $errors; ?>
<!-- formulaire -->
<?= $formhtml; ?>

<?php else: ?>

<?= $errors; ?>


<u><a href='<?= url('signup');?>'>Essaye encore !</a></u><hr>

<img src="https://media.giphy.com/media/jPAdK8Nfzzwt2/giphy.gif"/>
<?php endif; ?>

</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>