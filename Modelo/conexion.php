<?php
         try{
            $conexion = new PDO ("mysql: host=localchost; dbname=magarin", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

        }catch(Exception $e) {
            die ("Error" . $e->getMessage());
        }

