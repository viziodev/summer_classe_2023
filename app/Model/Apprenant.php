<?php 
use Config\Model;

class Apprenant extends Model{
public int $id;
public string $nomComplet;
public string $fichePresentation;
public string $login;
public string $password;
public string $discr="Apprenant";

public function formations(){

}

public function favoris(){

}
public static function tableName(){
return 'user';
}
}