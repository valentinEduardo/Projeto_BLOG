<?php
include('../config/connection.php');

    session_start();

        $login = $_POST['login'];
        $senha = md5($_POST[substr('senha',0 , 8)]);
$senhaReduzida = substr($senha,0, 8);
        $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");

        $stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senhaReduzida);

        //$stmt->bindValue(":LOGIN", md5($senha);

        $stmt->execute();
        if($stmt->rowCount() == 1){
            $info = $stmt->fetch();
            /*var_dump($info);*/
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $info['id'];
 $_SESSION['nome'] = $info['nome'];
            $_SESSION['login'] = $info['login'];
            $_SESSION['senha'] = $info['senha'];
                
            header("Location: view.php");
        }else{
            echo 'Usuário não cadastrado.';
        }

        

