<?php
function myAutoload($class)
    $class = str_replace('\\','/',$class);
    echo $class;
    {
        if(file_exists('Classes/'.$class.'.php'))
        {
            include('Classes/'.$class.'.php');
        }
    }

    spl_autoload_register('myAutoload'); //Registra a função e inclui automaticamente as classes

    new Utilidades();

    new Home\Inicial

    ?>