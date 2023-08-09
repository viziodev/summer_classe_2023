<?php 
namespace App\Controllers;

use App\Models\Categorie;
use Config\Controller;

class CatalogueController extends Controller{

     
    public function __construct()
    {
         
    }
    public function index(){
      //$this->renderView("catalogue/index");
      $this->renderJson(Categorie::findAll());
    }
    
}