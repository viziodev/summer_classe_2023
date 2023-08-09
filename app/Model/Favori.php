<?php 
namespace App\Models;

use Config\Model;
use App\Models\Formation;

 class Favori extends Model{
     public int  $id; 
     public string $date;
     public int $formationId;
     public int $apprenantId;
  
     public  static function  tableName(){
        return 'favori';
      }
    }