<?php 

namespace App\Models;

use Config\Model;

 class Video extends Model{
        public int $id;
        public int $ordre;
        public string $titre;
        public string $chapitre;
        public string $url;
        public int $duree;
         public int $formationId;
        public  static function  tableName(){
        return 'video';
    }
 }