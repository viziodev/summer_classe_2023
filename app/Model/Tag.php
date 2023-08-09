<?php 

namespace App\Models;

use Config\Model;

 class Tag extends Model{
     public int  $id; 
     public string $libelle; 
    //tableName='tag';

     public  static function  tableName(){
        return 'tag';
      }

      public function formations(){
        
      }
     
     //_construct();
}