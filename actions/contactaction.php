<?php
session_start();
include ('../conexao.php');
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cidade = $_SESSION['cidade'];;
$mensagem = $_POST["mensagem"];


$SQLinserir = "INSERT INTO contato(nome,telefone,cidade,mensagem) VALUES 
('$nome','$telefone','$cidade' ,'$mensagem')";
$resultado = mysqli_query ($conexao,$SQLinserir)
or die ("Falha na execucao de inseção dos dados");

echo "<script language='javascript'
				type='text/javascript'>
				window.location.href='../contact.php';</script>";
?>