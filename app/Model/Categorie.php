<?php 
namespace App\Models;

use Config\Model;
use App\Models\Formation;

 class Categorie extends Model{
     public int  $id; 
     public string $libelle;
    
    
      public  static function  tableName(){
        return 'categorie';
      }
      //tableName='categorie';
      //OneToMany
        public function formations (){
           return Formation::findByCategorie($this->id);
        }


     public function __construct()
     {
       
     }
     //_construct();
}