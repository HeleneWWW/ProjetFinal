<?php ob_start(); ?>

<h1>A Propos</h1>

<div><p>devHelper est un projet de validation de fin de formation en Développement Web. Notre idée est de rassembler le plus de ressources Web possibles liés au monde du Développement Web
et de permettre aux futurs développeurs ainsi qu'aux novices et même les plus confirmés d'avoir un répertoire quasi complet sous la main. 
Nous avons fait le choix de recenser des ressources officielles et d'autres moins officielles comme des comptes de réseaux sociaux, des mini jeux ou plus simplement des sites créés par des développeurs.<br>
Nous avons donc décidé de créer le site que nous aurions aimé avoir dans nos favoris au début de notre formation de Developpeur Web.</p>
</div>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>