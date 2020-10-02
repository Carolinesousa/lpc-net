<?php
include ('../../conexao.php');

$cidade = $_POST["cidade"];


$SQLinserir = "INSERT INTO cidades(cidade) VALUES 
('$cidade')";
$resultado = mysqli_query ($conexao,$SQLinserir)
or die ("Falha na execucao de inseção dos dados");

echo "<script language='javascript'
				type='text/javascript'>alert('mensagem enviada');
				window.location.href='../create_cidade.php';</script>";
?>
