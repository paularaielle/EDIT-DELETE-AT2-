<?php
    function conexao(){
        $servidor="localhost";
        $usuario="root";
        $senha="";
        $nome_banco="modulos";

        $conexao=null;

        try{
            $conexao = new PDO(
                "mysql:host=$servidor;dbname=$nome_banco",$usuario,$senha
            );

        }catch(PDOException $erro){
            echo "Erro de conexão".$erro->getMessage();
        }

        return $conexao;
    }
    conexao();
?>