<?php

function __autoload($class){
    $dirName = 'classes';
    
    if(file_exists("{$dirName}/{$class}.class.php")):
        require_once("{$dirName}/{$class}.class.php");
    else:
        die("<hr> Erro ao incluir/{$dirName}/{$class} <hr>");
    endif;
}

