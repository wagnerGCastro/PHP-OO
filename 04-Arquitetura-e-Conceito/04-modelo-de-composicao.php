<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    
    /**
     * MODELO DE COMPOSIÇÃO.
     * Permite criar objetos dentro de outras classes
    **/
    require('./inc/Config.inc.php');
    $wagner = new ComposicaoUsuario('wagner', 'wagner@gmail.com');
    $wagner->CadastrarEnderco('Ribeirão Preto', 'São Paulo');
    
    echo "O email de {$wagner->getNome()} é {$wagner->getEmail()} <br>";
    echo "{$wagner->getNome()} mora em {$wagner->getEndereco()->getCidade()}/{$wagner->getEndereco()->getEstado()}";
   
    echo "<pre style='font-size:16px'>";
    print_r($wagner);
    echo "</pre> <hr>"
        
  ?>
  </body>
</html>
