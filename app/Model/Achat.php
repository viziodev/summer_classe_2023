<?php 
namespace App\Models;

use Config\Model;
use App\Models\Formation;

 class Achat extends Model{
     public int  $id; 
     public string $date;
     public int $prixAchat; 
     public int $formationId;
     public int $apprenantId;
     public  static function  tableName(){
        return 'achat';
      }
    }