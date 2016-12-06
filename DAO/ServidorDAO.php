<?php

//require_once '../classes/Servidor.php';
require_once 'DAO.php';


class ServidorDAO{
        
    public function inserir_servidor(Servidor $servidor){        
        try{
            $con = DAO::getConexao();
            $query = "INSERT INTO servidor (matricula, cpf, email, nome, senha, id_cargo) VALUES (?,?,?,?,?,?)";
            $stmt = $con->prepare($query);
            
            $nome = $con->real_escape_string($servidor->getNome());
            $cpf = $con->real_escape_string($servidor->getCpf());
            $senha = $con->real_escape_string($servidor->getSenha());
            $matricula = $con->real_escape_string($servidor->getMatricula());
            $email = $con->real_escape_string($servidor->getEmail());
            $cargo = $con->real_escape_string(intval($servidor->getCargo()));
                                    
            $stmt->bind_param("sssssi",$matricula,$cpf,$email,$nome,$senha,$cargo);
            if(!$stmt->execute()){                
                return false;            
            }
            $stmt->close();
            $con->close();
            return true;
        } catch (Exception $e)
        {
            $con->close();
            echo $e->getMessage();
            return false;
        }
            
            
    }
    public function buscarPorMatricula($matricula)
    {
        $query = "SELECT * FROM servidor WHERE matricula = '{$matricula}'";
        $con = DAO::getConexao();        
        $resultado = $con->query($query);
        $arrayServidores = $resultado->fetch_all(MYSQLI_ASSOC);
        $con->close();
        if(count($arrayServidores)==0){
            return NULL;
        }
        return $arrayServidores[0];
    }
    
    public function listarTodos(){
        $query = "SELECT * FROM servidor ORDER BY nome ASC";
        $con = DAO::getConexao();
        
        $resultado = $con->query($query);
        $arrayServidores = $resultado->fetch_all(MYSQLI_ASSOC);
        $con->close();
        if(count($arrayServidores)==0){
            return NULL;
        }
        return $arrayServidores;
    }
}
