<?php

/**
 * Description of DAO
 *
 * @author kenad
 */

 class DAO
 {
     private $con;
     
     function getConexao(){
         $this->con = new mysqli('localhost', 'root', '', 'sistemadiarias');
         $this->con->set_charset("utf8");
         if(mysqli_connect_errno()){
             echo 'Codigo do erro '. mysqli_connect_errno();
             exit();
         }
         $this->con->set_charset("utf8");
         return $this->con;
     }
     
     function fecharConexao(){
        $this->con->close();
     }
 }