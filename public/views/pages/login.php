<?php ob_start(); ?>

<div class="container">

    <h1>Connectez vous</h1>
        <hr/>

    <?php if (!$formValid): ?>

        <?= $errors; ?>
        <!-- formulaire -->
        <?= $formhtml; ?>

    <?php else: ?>

        <!-- <p>Votre demande à bien été prise en compte.</p> -->

    <?php endif; ?>

</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>