<?php
    class UsuarioController{

        function __construct(){}

        function index(){
            require_once('Views/Usuario/bienvenido.php');
        }
     
        function register(){
            require_once('Views/Usuario/register.php');
        }

        function show(){
            require_once('Views/Usuario/show.php');
        }

        function save(){
            $alumno = new Alumno(NULL,$_POST['nom_usuario'],$_POST['email'],$_POST['contraseña']);
            Alumno::save($alumno);
            require_once('Views/Alumno/save.php');
        }

    }