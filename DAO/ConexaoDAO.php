<?php

/**
 * Description of DAO
 *
 * @author kenad
 */

 class ConexaoDAO
 {
     private $con;
     
     function getConexao()
     {
         $this->con = mysqli_connect('localhost', 'root', '', 'sistemadiarias');
         mysqli_set_charset($this->con, "utf8");
                  
         return $this->con;
     }
     
     function fecharConexao()
     {
         mysqli_close($this->con);
     }
 }
