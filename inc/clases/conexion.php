<?php


class Conexion{

      public function con(){

            try{
                  $con = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
                  return $con;

            }catch(PDOException $e){

                  return $e->getMessage();

            }

      }

}




?>
