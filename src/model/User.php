<?php
class User extends Db{


 /**
     * Proprietés 
     */
    protected $id;
 

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "user";
    const PRIMARY_KEY = "usr_id";

    /**
     * Méthodes magiques
     */
    public function __construct( $id = null ) {

        /**
         * Pour chaque argument, on utilise les Setters pour attribuer la valeur à l'objet.
         * Pour appeler une méthode non statique de la classe DANS la classe, on utilise $this.
         */
        if ( $id != null ) {
            $this->setId($id);
        }
    }

     /**
     * CRUD Methods
     */


//---------------------------------------------------------------------------------------------------------\\
// -----------------------------------------------POUR SE CONNECTER ---------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\


    public static function connect($pseudo, $pw){
        $bdd = Db::getDb();

        //je vérifie si l'email existe
    $query = $bdd->prepare('SELECT *
                            FROM '.self::TABLE_NAME.'
                            WHERE u_pseudo = :pseudo');
                
    $query->execute([
        'pseudo' => htmlentities($pseudo)
    ]);

    $user = $query->fetch(PDO::FETCH_ASSOC);
    if($user){
        $verify = password_verify($pw,$user['u_password']);

        if ($verify){
            
            unset($user['usr_password']);
            
            if($user["u_status"] == 0){
                $_SESSION['user'] = $user['u_pseudo'];

                redirectTo('');
            return true;
            

            }else{
                $_SESSION['admin'] = $user['u_pseudo'];
                
            return true;
            
            }
        }
        else{
            
            return 'Mauvais mot de passe';

        }
    }
    else{
        
        return 'Ce pseudo nous est inconnu !';

        }
    }

    public static function logout(){
        session_destroy();
            }

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR S'INSCRIRE !!!!!! ---------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

public static function register(){
    //connexion à la BDD
    $bdd = Db::getDb();

    //verification de l'email
    $verifMail = $bdd->prepare('SELECT u_email FROM user WHERE u_email = :mail');
    $verifMail->execute([
        'mail' => htmlentities($_POST['email'])
    ]);

    //verification du pseudo
    $verifpseudo = $bdd->prepare('SELECT u_pseudo FROM user WHERE u_pseudo = :pseudo');
    $verifpseudo->execute([
        'pseudo' => htmlentities($_POST['pseudo'])
    ]);
    $checkpseudo = $verifpseudo->fetch(PDO::FETCH_ASSOC);
    $checkmail = $verifMail->fetch(PDO::FETCH_ASSOC);
    //si l'email n'est pas en BDD...
        if(empty($checkmail)){ //...verifie le pseudo
            if(empty($checkpseudo)){ //si le pseudo n'est pas en BDD, prepare la requête
                $req = $bdd->prepare("INSERT INTO user(`u_pseudo`,`u_email`,`u_password`,`u_status`) VALUES (:pseudo, :mail, :pw , :status)");

                //si aucun des champs n'est vde...
                if(!empty($_POST['pseudo'])&&!empty($_POST['email'])&&!empty($_POST['password2'])&&!empty($_POST['password'])){
                    if ($_POST['password'] === $_POST['password2']){ //...vérifie que les passwords sont égaux
                        $req->execute([
                            'pseudo' => htmlentities($_POST['pseudo']),
                            'mail' => htmlentities($_POST['email']),
                            'pw' => password_hash($_POST['password'],PASSWORD_BCRYPT),
                            'status' => 0 ]);
                    }else{
                       return 'Les mots de passe doivent être identiques !';
                    }
                }else{
                    return 'Merci de renseigner tous les champs !';
                }
            }else{
                return 'Ce pseudo est déjà utilisé !';
            }
            }else{
                return 'Cette adresse mail est déjà utilisée !';
            } 
   return true;
}


}

