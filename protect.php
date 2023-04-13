<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION['id'])){
        die("Voce não pode acessar essa pagina.<p> <a href=\"pages\samples\login.php\">Entrar</a></p>");
    }
?>