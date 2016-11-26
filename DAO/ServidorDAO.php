<?php

//require_once '../classes/Servidor.php';
require_once 'DAO.php';


class ServidorDAO{
    
    private $conexao;
    
    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }
    
    public static function inserir_servidor(Servidor $servidor){        
        try{
            $con = $this->conexao;
            $query = "INSERT INTO servidor (cpf, nome, senha, matricula) VALUES (?,?,?,?)";
            $stmt = $con->prepare($query);

            $nome = $servidor->getNome();
            $cpf = $servidor->getCpf();
            $senha = $servidor->getSenha();
            $matricula = $servidor->getMatricula();

            $stmt->bind_param("sssi", $cpf, $nome, $senha, $matricula);
            if(!$stmt->execute()){
                return false;            
            }
            $stmt->close();
            $dao->fecharConexao();
            return true;
        } catch (Exception $e)
        {
            echo $e->getMessage();
            return false;
        }
    }
    public function buscarPorMatricula($matricula)
    {
        $query = "SELECT * FROM servidor WHERE matricula = '{$matricula}'";

        $resultado = mysqli_query($this->conexao, $query);

        $servidores = array();

        while($servidor = mysqli_fetch_assoc($resultado))
        {
            array_push($servidores,$servidor);
        }

        return $servidores;
    }
}
