<?php 
namespace App\Models;

use Config\Model;

class Formation extends Model{
      public int  $id; 
      public string $libelle;
      public int  $categorie_id; 
      
      public  static function  tableName(){
        return 'formation';
      }

      //ManyToOne
      public function categorie(){
          return Categorie::findOrFail($this->categorie_id);
      }

       public static  function findByCategorie(int $categorie){
            parent::query("SELECT * FROM  ". self::tableName()." where categorie_id=:categorie ",["categorie"=>$categorie]);
      }
}