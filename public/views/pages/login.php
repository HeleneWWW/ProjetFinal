<?php ob_start(); ?>

<div class="container">

    <h1>Connectez vous</h1>
        <hr/>

    <?php if (!$formValid): ?>

        <?= $errors; ?>
        <!-- formulaire -->
        <?= $formhtml; ?>

        <?php else: ?>

        <?= $errors; ?>


<u><a href='<?= url('login');?>'>Essaye encore !</a></u><hr>

<img src="https://media.giphy.com/media/jPAdK8Nfzzwt2/giphy.gif"/>
<?php endif; ?>

</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>