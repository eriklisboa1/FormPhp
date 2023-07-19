<?php

require_once 'conexao.php';

class Inserir{

    function inserirUsuario($nome,$idade,$cpf,$email){
        try{
            $pdo  = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        }catch (PDOExeception $erro){
            echo "Erro na conexão:" . $erro->getMessage();
        }
        try{
            $stmt = $pdo->prepare("INSERT INTO usuario(nome,idade,cpf,email) VALUES
            (:nome, :idade, :cpf, :email)");

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':idade', $idade);
            $stmt->bindParam(':cpf',$cpf);
            $stmt->bindParam(':email',$email);

            $stmt->execute();
            if($stmt->rowCount() > 0){
                $resultadoInsert="OK";
                header("location: sucesso.php"); exit;
            }
        }catch(PDOExeception $erro){
            echo "Erro" . $erro->getMessage();
        }
    }

}


?>