<?php 
namespace Config;
abstract class Model extends DataBase {
     public abstract static function  tableName();
     public  static function  primaryKey(){
          return "id";
     }
      public  function save(){
        
      }
      //insert ou update
      public function find(){
        
      }//Get Id

     
     /*  Requete de Mis a jour => entier */  
      public static function create(array $data) {
         $keys=array_keys($data);
         $sql="insert into ".static::tableName()."(".implode(',',$keys).")  values(:".implode(',:', $keys).")";
         $lastInsertId=self::executeUpdate($sql, $data);
         return self::findOrFail($lastInsertId);
      } 

      protected static function sqlUpdate(array $data){
        $columnUp=[...$data];
        unset($columnUp['id']);
        $sql="update ".static::tableName()." set ";
        foreach ($columnUp as $key => $value) {
            # code...
            $sql.="$key=:$key,";
        }
        $sql=rtrim($sql,",");
        $sql.=" WHERE ".static::primaryKey()."=:id";
        return $sql;
      }
     
     public static function update(array $data) {
        //0 ==> false !0==> true
        if( self::executeUpdate(self::sqlUpdate($data), $data)){
              return self::findOrFail($data[static::primaryKey()]);  
        }
        return null;
      }
      public static function delete(int $id) {
        return self::executeUpdate("delete from ".static::tableName()." where ".static::primaryKey()."=:id", ["id" => $id]);
      }

    /* Requete de  selection => Objet ou Tableau Objet */ 

    public static function findAll(string $column="*") {
       return self::query("select $column from  ".static::tableName());    
    }

    public static function findOrFail(int $id,string $column="*") {
        return self::query("select $column from  ".static::tableName() ."  where ".static::primaryKey()."=:id",["id"=>$id],true); 
    }

    //Execute Select
    protected static function query(string $sql, array $data=[],bool $single=false) {
    /** 
     * Connexion de la base de donnee
     *   Approche : Acces en Mode Connecte
     *    A chaque fois que je veux aller vers une BD 
     *      1.Ouvre la Connexion
     *      2.Execute la requete 
     *      4.Retourner le resultat
     *      3.Ferme la connexion 
     */ 
           // self::open();
            parent::open(); 
            $stm=parent::$pdo->prepare($sql);
           
            $stm->execute($data);
            $stm->setFetchMode(\PDO::FETCH_CLASS,get_called_class());
            if($single){
                  $data=$stm->fetch();
            }else{
               $data=$stm->fetchAll(); 
            }
            $stm->closeCursor();
            parent::close();
            return $data;
            
    }

    //Execute Update
    protected static function executeUpdate(string $sql, array $data) {
         parent::open(); 
            $stm=parent::$pdo->prepare($sql);
            $stm->execute($data);
           
            if(str_starts_with(strtolower($sql),'insert')){
               $data =parent::$pdo->lastInsertId() ;
            }else{
               $data= $stm->rowCount() ;
            }
            //insert ==> return last inserted id 
            //delete|update ==> return int(nbre ligne modifiees) 
            $stm->closeCursor();
            parent::close();
            return $data;
    }
}