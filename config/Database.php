<?php 

namespace Config;
//Gerer Ouverture et Fermeture Database
abstract class DataBase {

    //Desing Pattern : Singleton
    protected  static   \PDO|null $pdo =null;
    
    public static function open(){
        try {
            if(self::$pdo==null){
                   self::$pdo=new \PDO('mysql:dbname=summer_class_2023;host=localhost:8889', 'root', 'root');
            }
        } catch (\PDOException $ex) {
            dd($ex->getMessage());
        }
       
    }

    public static function close(){
        if(self::$pdo!=null){
            self::$pdo=null;
        }
    }

    /**
     * Connexion de la base de donnee
     *   Approche : Acces en Mode Connecte
     *    A chaque fois que je veux aller vers une BD 
     *      1.Ouvre la Connexion
     *      2.Execute la requete 
     *      3.Ferme la connexion 
     *   Approche : Acces en Mode Deconnecte  ==> "C#"
     *      1.Ouvre la Connexion a la BD une seule fois 
     *           2.Execute les requetes 
     *      3.Ferme la la BD une seule fois  
     * 
     *   Approche : Pool connection
     */
    
}