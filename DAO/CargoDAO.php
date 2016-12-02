<?php

/**
 * Description of ClasseDAO
 *
 * @author kenad
 */
require_once('DAO/DAO.php');
require_once('classes/Cargo.php');

class CargoDAO
{

    function inserir(Cargo $cargo)
    {
        try {
            $query = "insert into cargo(nome,id_perfil_diaria) values('{$cargo->getNome()}','{$cargo->getPerfilDiaria()->getId()}')";
            $dao = new DAO();
            $conexao = $dao->getConexao();
            $resultado = $conexao->query($query);            
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            
            return false;
        }
    }
    function buscarPorId($id)
    {
        $query = "select * from cargo where id = '{$id}'";
        $dao = new DAO();
        $conexao = $dao->getConexao();
        $resultado = $conexao->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);

        if(count($cargo)==0){
            $dao->fecharConexao();
            return NULL;
        }
        $dao->fecharConexao();
        return $cargo[0];
    }
    function buscarPorNome($nome)
    {
        $query = "select * from cargo where nome = '{$nome}'";
        $dao = new DAO();
        $conexao = $dao->getConexao();
        $resultado = $conexao->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);

        if(count($cargo)==0){
            $dao->fecharConexao();
            return NULL;
        }
        $dao->fecharConexao();
        return $cargo[0];
    }
    function listarTodos()
    {
        $query = "select * from cargo ORDER BY nome ASC";
        $dao = new DAO();
        $conexao = $dao->getConexao();
        $resultado = $conexao->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);

        if(count($cargo)==0){
            $dao->fecharConexao();
            return NULL;
        }
        $dao->fecharConexao();
        return $cargo;
    }
}
