<?php

/**
 * Description of ClasseDAO
 *
 * @author kenad
 */
require_once('DAO/DAO.php');
require_once('classes/Cargo.php');

class CargoDAO{
    

    function inserir(Cargo $cargo)
    {
        try {
            $query = "insert into cargo(nome,id_perfil_diaria) values('{$cargo->getNome()}','{$cargo->getPerfilDiaria()->getId()}')";

            mysqli_query($conexao, $query);
            
            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            
            return false;
        }
    }
    function buscarPorId($id)
    {
        $query = "select * from cargo where id = '{$id}'";

        $resultado = mysqli_query($conexao, $query);

        $cargos = array();

        while($cargo = mysqli_fetch_assoc($resultado))
        {
            array_push($cargos,$cargo);
        }

        return $cargo;
    }
    function buscarPorNome($nome)
    {
        $query = "select * from cargo where nome = '{$nome}'";

        $resultado = mysqli_query($conexao, $query);

        $cargos = array();

        while($cargo = mysqli_fetch_assoc($resultado))
        {
            array_push($cargos,$cargo);
        }

        return $cargo;
    }
    function listarTodos()
    {
        $query = "SELECT * FROM cargo ORDER BY nome ASC";

        $dao = new DAO();
        $conexao = $dao->getConexao();
        $resultado = $conexao->query($query);
        $arrayCargo = $resultado->fetch_all(MYSQLI_ASSOC);
        $dao->fecharConexao();
        return $arrayCargo;
    }
}