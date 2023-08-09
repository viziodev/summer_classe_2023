<?php 
namespace App\Models;

use Config\Model;

class Formateur extends Model{
      public int  $id; 
      public string $nomComplet;
      public string $fichePresentation;
      public string $login;
      public string $password;
      public string $discr="Formateur";
      public function formations(){
        
      }
     public  static function  tableName(){
        return 'user';
      }
}