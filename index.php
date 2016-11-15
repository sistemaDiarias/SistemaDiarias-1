<?php
    require_once ('classes/pagina.php');
    
    class Pagina_Inicial extends Pagina{
        public function exibir_body() {
            parent::exibir_body();
            ?>
                <h1>Isso não é mais PHP</h1>
            <?php
                        echo 'Aqui é php';
        }
    }
    
    $t = new Pagina_Inicial;
    $t->set_titulo('Pagina inicial');
    
    
    $t->display();
    
?>