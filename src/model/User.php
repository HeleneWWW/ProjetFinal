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
    public static function connect($pseudo, $pw){
        $bdd = Db::getDb();

        //je vérifie si l'email existe
    $query = $bdd->prepare('SELECT *
                            FROM '.self::TABLE_NAME.'
                            WHERE u_pseudo = :pseudo');
                
    $query->execute([
        'pseudo' => $pseudo
    ]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if($user){
        $verify = password_verify($pw,$user['u_password']);

        if ($verify){
            
            unset($user['usr_password']);
            
            if($user["u_status"] == 0){
                $_SESSION['user'] = $user['u_pseudo'];
                // var_dump($user);
            return true;
            redirectTo('');

            }else{
                $_SESSION['admin'] = $user['u_pseudo'];
            return true;
            redirectTo('');

            }

          

        }
        else{
            redirectTo('login');
            return false;
        }
    }
    else{
        redirectTo('login');

        return false;
        }
    }


 

    public static function logout(){
        session_destroy();
            }
        }