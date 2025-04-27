<?php
         try{
            $conexion = new PDO ("mysql: host=localchost; dbname=magarin", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $e) {
            die ("Error" . $e->getMessage());
        }

