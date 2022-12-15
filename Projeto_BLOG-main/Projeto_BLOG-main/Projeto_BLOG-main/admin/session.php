<?php
session_start();
    if($_SESSION['logado'] != true){
        header('Location: index.php');
        die();
    }
    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_cache_expire(60);
        session_start();
      }
      
?>
