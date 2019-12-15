<?php ob_start(); ?>

<h1>C'est par là pour t'inscrire :</h1>
<?php if (!$formValid): ?>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formhtml; ?>

<?php else: ?>

    <!-- <p>Votre demande à bien été prise en compte.</p> -->

<?php endif; ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>