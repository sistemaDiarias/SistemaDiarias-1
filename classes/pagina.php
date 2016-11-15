<?php

class Pagina {
    
    private $titulo;
    
    function Pagina(){
        $this->titulo = "Titulo da pagina";
    }
            
    final function display(){
        echo "<!DOCTYPE html>\n";
        echo "<html lang='pt-br'>\n";
        echo "<head>\n";
        $this->exibir_titulo();
        $this->exibir_config();
        
        echo "</head>\n<body>\n";
        $this->exibir_body();
        
        echo "</body>\n</html>";
    }
    
    final function set_titulo($titulo){
        $this->titulo = $titulo;
    }
            
    function exibir_titulo(){
        echo "<title>".$this->titulo."</title>\n";
    }
    
    function exibir_config(){
        ?>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <?php
        
    }
    
    function exibir_body(){
        $this->exibir_navbar();
        
    }
            
    function exibir_navbar(){
        ?>
        <div class="container">
        <nav>
            <ul class="w3-navbar w3-black">
                <li style="width: 25%;"><a href="index.php">Página inicial</a></li>
                <li style="width: 25%;"><a href="#">Solicitar diária</a></li>
                <li style="width: 25%;"><a href="cadastro_servidores.php">Cadastros</a></li>
                <li style="width: 25%;">
                    <button style="width: 100%;" onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-green w3-large">Login</button>
                </li>                
            </ul>
        </nav>
        </div>
        
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

              <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">×</span>
                <img src="img_avatar4.png" alt="Fazer login" style="width:30%" class="w3-circle w3-margin-top">
              </div>

                <form class="w3-container" action="" method="post">
                <div class="w3-section">
                  <label><b>Email</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Digite seu e-mail" name="email" required>
                  <label><b>Senha</b></label>
                  <input class="w3-input w3-border" type="password" placeholder="Digite sua senha" name="senha" required>
                  <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
                  <a href="cadastro_servidores.php"><label>Nao sou cadastrado</label></a>
                  
                </div>
              </form>

              <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancelar</button>
                <span class="w3-right w3-padding w3-hide-small"><a href="#">Esqueci a senha</a></span>
              </div>

            </div>
          </div>
        
        
        <?php
    }
}



?>