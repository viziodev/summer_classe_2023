<?php 
namespace App\Models;

use Config\Model;

class Formation extends Model{
      public int  $id; 
      public string $libelle;
      public int  $categorie_id; 
      public string $photo;
      public int $cout;
      public int $duree;
      public int $note;
      public bool $publier ;
      public bool $promo ;
      public int $remise ;
      public string $dateDebutPromo ;
      public string $dateFinPromo;

      
      public  static function  tableName(){
        return 'formation';
      }

      //ManyToOne
      public function categorie(){
          return Categorie::findOrFail($this->categorie_id);
      }

      public function tags(){
       
      }

      public function videos(){
       
      }

       public static  function findByCategorie(int $categorie){
            parent::query("SELECT * FROM  ". self::tableName()." where categorie_id=:categorie ",["categorie"=>$categorie]);
      }
}