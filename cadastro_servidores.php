<?php
    require_once 'classes/pagina.php';
    
    
    class Pagina_Cadastro_Servidores extends Pagina{
        public function exibir_body() {
            parent::exibir_body();            
            ?>
                <h1>Pagina de cadastro de servidores</h1>
                
            <?php
        }
        
    }
    
    $t = new Pagina_Cadastro_Servidores();
    
    $t->set_titulo('Cadastro de servidores');
    
    
    $t->display();
    
?>
