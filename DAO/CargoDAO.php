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
            $con = DAO::getConexao();
            $resultado = $con->query($query);    
            $con->close();
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $con->close();
            return false;
        }
    }
    function buscarPorId($id)
    {
        $query = "select * from cargo where id = '{$id}'";
        $con = DAO::getConexao();
        $resultado = $con->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);
        $con->close();
        if(count($cargo)==0){
            return NULL;
        }
        return $cargo[0];
    }
    function buscarPorNome($nome)
    {
        $query = "select * from cargo where nome = '{$nome}'";
        $con = DAO::getConexao();
        $resultado = $con->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);
        $con->close();
        if(count($cargo)==0){
            return NULL;
        }
        return $cargo[0];
    }
    function listarTodos()
    {
        $query = "select * from cargo ORDER BY nome ASC";
        $con = DAO::getConexao();
        $resultado = $con->query($query);
        $cargo = $resultado->fetch_all(MYSQLI_ASSOC);
        $con->close();
        if(count($cargo)==0){
            return NULL;
        }
        return $cargo;
    }
}
