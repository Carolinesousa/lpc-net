<?php
include ('../../conexao.php');
$velocidade = $_POST["velocidade"];
$valor = $_POST["valor"];
$descricao1 = $_POST["descricao1"];
$descricao2 = $_POST["descricao2"];
$descricao3 = $_POST["descricao3"];
$id_cidade = $_POST["id_cidade"];


$SQLinserir = "INSERT INTO planos(velocidade,descricao1,valor,descricao2,descricao3,id_cidade) VALUES 
('$velocidade','$descricao1','$valor' ,'$descricao2' ,'$descricao3','$id_cidade')";
$resultado = mysqli_query ($conexao,$SQLinserir)
or die ("Falha na execucao de inseção dos dados");

echo "<script language='javascript'
				type='text/javascript'>alert('mensagem enviada');
				window.location.href='../index.php';</script>";
?>