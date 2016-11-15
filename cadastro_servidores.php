<?php
    require_once 'classes/pagina.php';
    
    $cadastro = new Pagina();
    $cadastro->set_titulo('Cadastro de servidores');
    
    $cadastro->display();
    
?>
