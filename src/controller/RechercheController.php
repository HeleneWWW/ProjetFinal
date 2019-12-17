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

if(isset($_GET['site'])){
            // $nom = Site::findByName($query);
            $tag = Site::findByTag($_GET['site']);
            $alert = '';
            echo 'quelquechose';
}else{
    $alert = alerte('Pas de recherche vide');
    echo 'rien';
}
           

// var_dump($tag);

    //     } else {
    //         // affichage des erreurs 
    //         $errors =  $form->displayErrors();
            
    //     }


        view('pages.search', compact('tag','alert'));
        // view('site.allsite', compact('searchformhtml', 'formValid', 'errors'));
        // view('site.onesite', compact('searchformhtml', 'formValid', 'errors'));


    }

}

?>