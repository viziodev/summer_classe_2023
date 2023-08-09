<?php 
namespace Config;
class Router{
    
     protected static array $routes=[];
      public static function route(string $uri,array|callable $params){
          self::$routes[$uri]=$params;
     }


     public static function resolve(){
          $uri=($_SERVER['REQUEST_URI']);
         
         if(isset(self::$routes[$uri])){
            if(is_array(self::$routes[$uri])){
               [$ctrlClass,$action]=self::$routes[$uri];
             if(class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
                  //Demarrer la Session
                  $ctrl=new  $ctrlClass();
                  $ctrl->{$action}();
             }else{
                dd("Erreur sur la classe ou sur la Methode");
             } 
            }elseif(is_callable(self::$routes[$uri])){
                $function=self::$routes[$uri];
                $function();
            }
             
         }else{
            dd("uri Pas existe");
         }
          
     }
     
} 