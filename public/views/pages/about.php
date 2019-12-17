<?php ob_start(); ?>

<div class="container">

    <h1>A Propos</h1>
        <hr/>
    <h2>Qui ? </h2>

    <div><p>3 apprenantes en développement Web au sein du centre de formation WebForce3 Lyon : Gaëlle, Hélène, Laetitia.</p></div>
    <h2>Quoi ? </h2>

    <div><p><b>devHelper</b> est un projet de validation de fin de formation en Développement Web.<br>
    Notre idée est de rassembler <b>le plus de ressources Web possibles</b> liées au monde du Développement Web
    et de permettre aux futurs développeurs ainsi qu'aux novices et même les plus confirmés d'avoir un répertoire quasi complet sous la main. 
    Nous avons fait le choix de recenser des ressources officielles et d'autres moins officielles comme des comptes de réseaux sociaux, des mini jeux ou plus simplement des sites créés par des développeurs.<br>
    Nous avons donc décidé de créer le site que nous aurions aimé avoir dans nos favoris au début de notre formation de Developpeur Web.<br>
    Nous espérons que vous y trouverez ce dont vous avez besoin pour débuter l'aventure du developpement ou trouver un complément d'informations pour vos projets présents et futurs.</p>
    </div>
    <h2>Comment ? </h2>
    <div><p>Développé en quelques jour en local grâce aux techniques <b>MVC</b>, mélant <b>HTML, CSS, PHP</b>. Nous avons utilisé les logiciels <b>Xampp, PHPMyAdmin, Visual Studio Code</b>. <b>Trello</b> et <b>GitHub</b> nous ont servi pour la gestion du projet du début à la fin.
    Evidemment <b>Slack</b>, <b>Discord</b> et la suite Google ont été de bons outils pour ce projet.</p></div>

</div>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>