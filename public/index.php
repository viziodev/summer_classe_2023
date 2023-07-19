<?php

use App\Models\Categorie;
use App\Models\Formation;


require_once "./../vendor/autoload.php";

/**
 * Categorie Classe 
 *   abstraites
 *   concretes 
 *   final
 * 
 *  Categorie Methodes
 *   abstraites
 *   concretes (instance/static/final)  
 *  
 * Categorie Attributs 
 *  static 
 *  instance
 */

 //Ajouter une categorie

Categorie::create([
    'libelle' => 'PHP'
]);
//insert into categorie('libelle') values("PHP");
$cat =new Categorie;
$cat->libelle="Dev Imfo";
$cat->save();
//insert into formation('libelle',"montant") values("PHP",1000);
Formation::create([
    "libelle" =>"PHP POO",
    "montant"=>1000
])
$form =new Formation;
$form->save();
 
 