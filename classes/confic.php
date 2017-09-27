<?php

   abstract class db{
        public $pdo;
   
       public function __construct() {
          $host_name="localhost";
          $user_name="root";
          $password="";
          $db_name="crud_project_dynamic";
          try {
               $this->pdo = new PDO("mysql:host=$host_name;dbname=$db_name",$user_name, $password);
               
          } catch (PDOException $exc) {
              echo $exc->getMessage();
          }
      }
      
     
       
        
    }

