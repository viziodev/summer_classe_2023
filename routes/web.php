<?php

use App\Controllers\CatalogueController;
use App\Controllers\CategorieController;
use Config\Router;

Router::route("/categorie",[CategorieController::class, "index"]);
Router::route("/catalogue",[CatalogueController::class, "index"]);
Router::route("/categories",function(){
       dd("Test");
});