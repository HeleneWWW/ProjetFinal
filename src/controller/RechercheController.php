<?php

class RechercheController {

    public function search(){
    //         $form = new Form($_GET);
    //         $form->input("text", 'query','Recherche')->required()
    //              ->submit('rechercher');

    //     $searchformhtml = $form->getForm();
    //     $formValid  = false;
    //     $errors     = false; 
    //    // si le formulaire est validé 
    //     if($data = $form->valid()){

    //         // formulaire valide
    //         $formValid = true;

// $tag = Site::findByTag();
// $alert = '';
$tag = '';
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
           

// var_dump($tag);

    //     } else {
    //         // affichage des erreurs 
    //         $errors =  $form->displayErrors();
            
    //     }


        view('pages.search', compact('tag','alert','nom'));
        // view('site.allsite', compact('searchformhtml', 'formValid', 'errors'));
        // view('site.onesite', compact('searchformhtml', 'formValid', 'errors'));


    }

}

?>