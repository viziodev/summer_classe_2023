<?php

use App\Models\Tag;
use Config\DataBase;
use App\Models\Categorie;
use App\Models\Formation;

require_once "./../vendor/autoload.php";

require_once "./../boostrap/bootstrap.php";

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
//$cat =new Categorie;
 //dd(Categorie::$tableName);

 //insert into categorie (libelle)  values(:libelle)



  //insert into formation (libelle,categorie_id)  values(:libelle,:categorie_id)
/*  dd(Formation::create([
       "libelle" =>'PHP Procedural',
       "categorie_id" =>1
 ])); */

 /* dd(Formation::delete(1)); */

 dd(Formation::update([
       "id" =>2,
       "libelle" =>'PHP POO 2',
       "categorie_id" =>1
])); 
 //update formation set libelle=:libelle ,categorie_id=:categorie_id where id=:id

 
 