<?php
/*
         try{
            $conexion = new PDO ("mysql: host=localhost; dbname=magarin", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

        }catch(Exception $e) {
            echo "no se ha podido conectar a la base de datos";
            die ("Error" . $e->getMessage());
        }
*/

  $host_name = 'db5017818762.hosting-data.io';
  $database = 'dbs14213827';
  $user_name = 'dbu4663048';
  $password = 'XXXXXXXXXX';
 

  try {
    $conexion = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Error!:" . $e->getMessage() . "<br/>";
    die();
  }
?>