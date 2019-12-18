<?php

class RechercheController {

    public function search(){
   
$tag = '';
$nom = '';

        if(!empty($_GET['site'])){

            $tag = Site::findByTag($_GET['site']);
        $alert = '';
            if(empty($tag)){
                $nom = Site::findByName($_GET['site']);
                $alert = ''; 
                if(empty($nom)){
        redirectTo('pages.404'); 
                }
            }
       }else{

            $alert = alerte('Pas de recherche vide');

        }

        view('pages.search', compact('tag','alert','nom'));

            }

}

?>