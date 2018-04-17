<?php

// CONFIGURAÇÕES DO SITE ##################
// AUTO LOAD DE CLASSES  ##################

function __autoload($Class) {
    $dirName = 'classes';

    if (file_exists("{$dirName}/{$Class}.class.php")) {
        require_once("{$dirName}/{$Class}.class.php");
    } else {
        die("<hr> Erro ao incluir/{$dirName}/{$Class} <hr>");
    }
}

// TRATAMENTO DE ERROS   ##################
// CSS coantantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');


//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\"> {$ErrMsg} <span class=\"ajax_close\"> </span> </p> ";

    if ($ErrDie) { die; }
}

//PHPErro :: personaliza o gstilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\" >";
    echo "<b> Erro na Linha: {$ErrLine} :: </b> {$ErrMsg} <br>";
    echo "<small> {$ErrFile} </small>";
    echo " <span class=\"ajax_close\">  </span> </p>";

    if ($ErrNo == E_USER_ERROR) { die; }
}

set_error_handler('PHPErro');
