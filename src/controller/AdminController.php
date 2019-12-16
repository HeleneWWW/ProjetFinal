<?php 
    class AdminController {

public function __construct(){
    //redirection de l'utilisateur s'il n'est pas connecté
    if(!isset($_SESSION['admin'])){
        redirectTo('');
            }else{
                
            }
            
    
}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AFFICHER TOUS LES SITES ---------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
        public function allSite() {
            // appel a la BDD 
            $sites = Site::findAll();
            // $tags = Site::findOne();
            $alert ='';
if((isset($_SESSION['delete'])) &&  ($_SESSION['delete'] == true)){
    // var_dump($_SESSION);
   $alert = alerte('Suppression réussie','https://media2.giphy.com/media/XreQmk7ETCak0/giphy.gif');
    
    unset($_SESSION['delete']);
}
          
            view('admin.allsites', compact('sites','alert'));
            // unset($_SESSION['delete']);
        }
        
//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AFFICHER UN SEUL SITE -----------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
        public function show($id) {
            
            view('exemple.all');
        }

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AJOUTER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
        public function addSite(){
        
                $form = new Form($_POST);
                $tags = Tags::getAllSelect();

                // var_dump($tags);
                $form->input('text', "nom", "Nom du site")->required()
                    ->input('text', "image", "Image du site")
                    ->input('text', "url", "Url du site")->required()
                    ->input('textarea', "description", "Description")->required()
                    ->input('checkbox', 'tags', "Tags", $tags)   //->required()
                    ->submit('Enregistrer');
            // var_dump($_POST);
                $formulaireHtml = $form->getForm();
        
                $formValid  = false;
                $errors     = false; 
        
                // si le formulaire est validé 
                if (!empty($_POST)) {
                    if($data = $form->valid()){

                        // formulaire valide
                        $formValid = true;
                    
                        // Enregistrement des données
                      $id = Site::save([
                            "s_nom"     => $data['nom'],
                            "s_slug"    => slugify($data['nom']),
                            "s_url"   => $data['url'],
                            "s_imgindex"   => $data['image'],
                            "s_description"   => $data['description']
                            // 's_id'   => $data['tags']
                        ]);

                        for($i = 0; $i<count($_POST['tags']); $i++) {
                            
                            Tagsite::save([
                                's_id' => $id,
                                't_id' => $_POST['tags'][$i]
                            ]);
                        }
                        // redirection apres ajout en BDD 
                        // redirectTo('site/'.$id.'/'.slugify($data['nom']));
                        //redirection pendant le developpement
                        redirectTo('admin/site/add');
                        // redirectTo('admin/site/add');

                    } else {
                        // affichage des erreurs 
                        $errors =  $form->displayErrors();
                    }
                }
                
                // vue de la page contact 
                view('admin.addsite', compact('formulaireHtml','errors','alert'));
   
        }
//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR SUPPRIMER UN SITE ---------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
        public function deleteSite($id){

          $suppr1 = Tagsite::delete($id);
          $suppr2 =  Site::delete($id);
            
                   $_SESSION['delete'] = true;
            
              redirectTo('admin/site');
               
            }



    }