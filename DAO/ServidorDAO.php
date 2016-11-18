<?php

require_once 'ConexaoDAO.php';


class ServidorDAO{
    public static function inserir_servidor($servidor){
        $dao = new ConexaoDAO();
        $con = $dao->getConexao();
        
        $matricula = $servidor->getMatricula();
        $cpf = $servidor->getCpf();
        $nome = $servidor->getNome();
        $senha = $servidor->getSenha();
        
        $stmt = $con->prepare("INSERT INTO servidor(matricula, cpf, nome, senha) VALUES (?,?,?,?)");
        $stmt->bind_param('isss', $matricula, $cpf, $nome, $senha);
        $stmt->execute();
    }
    
    
}
