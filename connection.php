<?php

    class DB{
        function __construct(){}

        public static function getConnection(){

            $conexion = new PDO('pgsql:host=localhost;port=5432;dbname=test','postgres','curso');
            //var_dump($conexion);
            return $conexion;
        }
    }

