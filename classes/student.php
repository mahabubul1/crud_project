<?php
   include 'confic.php';
    class student extends db {
          private $table='tbl_crud';
        
        public function insertData($data){
                try {
                     $studetn_info= $this->pdo->prepare( "insert into  $this->table(name, department,age) values(:alam,:misba,:age) ") ;
                      $studetn_info->bindParam(':alam', $data['name']);
                      $studetn_info->bindParam(':misba', $data['department']);
                      $studetn_info->bindParam(':age', $data['age']);
                      $studetn_info->execute();
                      $message="data insert successfully";
                      return $message;
                   
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                  }
              }
  
              
              
           public function selectData_pagination($pages){
              try {
                   $staement= $this->pdo->prepare("select * from $this->table limit $pages,5");
                    $staement->execute();
                   return $staement;
              } catch (PDOException $exc) {
                  echo $exc->getMessage();
              }
                        
          }    
          public function selectData(){
              try {
                   $staement= $this->pdo->prepare("select * from $this->table");
                    $staement->execute();
                   return $staement;
              } catch (PDOException $exc) {
                  echo $exc->getMessage();
              }
                        
          }    
             
        public function select_data_id($student_id){
            try {
                   $staement= $this->pdo->prepare("select  *  from $this->table  where  id='$student_id'  ");
                    $staement->execute();
                   $result = $staement->fetch(PDO::FETCH_ASSOC);
                   return $result  ;
              } catch (PDOException $exc) {
                  echo $exc->getMessage();
              }
        }  
        
     public function update_data_info($data){
           try {
                   $staement= $this->pdo->prepare(" UPDATE   $this->table  set  name= ?,department= ?,age= ? where id=? ");
                   $staement->bindParam(1, $data['name']);
                    $staement->bindParam(2, $data['department']);
                    $staement->bindParam(3, $data['age']);
                    $staement->bindParam(4, $data['id']);
                    $staement->execute();
                     $message="data update successfully";
                      return $message;
              }   catch (PDOException $exc) {
                  echo $exc->getMessage();
              }
     }   
        
     public function delete_data($id){
            try {
                $staement=$this->pdo->prepare(" delete from $this->table where id='$id ' ") ;
                  $staement->execute();
               $message="data delete successfully";
               return $message;
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
              
     }  
     
     
        
        
    }
    
    
    ?>