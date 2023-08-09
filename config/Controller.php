<?php 
namespace Config;
class Controller{
    protected $layout="public";
    

    /**
     * Response HTML + CSS  + JS  => Monolithic
     */
    
    public function renderView(string $path, array $data=[]){
          ob_start();
           extract($data);
              require_once "./ressources/views/".$path.".html.php";
               $contentForView= ob_get_clean();
           require_once "./ressources/layouts/".$this->layout.".layout.html.php";
    }
    
    /**
     * Response Json
     */
    public function renderJson(array $data){
        echo json_encode($data);
    }
    
}