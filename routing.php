<?php

    $controllers=array(
        'usuario'=>['index','register','save','show','updateshow','update','delete','error']
    );

    if (array_key_exists($controller,  $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        }
        else{
            call('usuario','error');
        }		
    }else{
        call('usuario','error');
    }

    function call($controller, $action){
        require_once('Controllers/'.$controller.'Controller.php');
     
        switch ($controller) {
            case 'usuario':
            require_once('Model/Usuario.php');
            $controller= new UsuarioController();
            break;			
            default:
                    # code...
            break;
        }
        
        $controller->{$action}();
    }
