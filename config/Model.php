<?php 
namespace Config;
abstract class Model {
      public abstract function save();//insert ou update
      public abstract function find();//insert ou update
  
      public static function create(array $data) {
        
      } 
     
     public static function update(array $data) {
        
    }

    public static function findAll() {
        
    }

    public static function findOrFail(int $id) {
        
    }

    public static function query() {
        
    }
}