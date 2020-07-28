<?php
$login=$_POST["usuario"];

$senha=$_POST["senha"];

if (($login == "acesso") && ($senha == "acessocodex7496")){

    echo '<script>window.location="/index2.html";</script>';

}else {

    echo '<script>alert("Usuario ou Senha invalido! Contate o suporte.")</script>';
    echo '<script>window.location="/index.html";</script>';

}