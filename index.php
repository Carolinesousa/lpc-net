
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">

  <title>LPC NET</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-grid.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  
</head>

<body class="hero">

 <?php
		include("conexao.php");
		
		$consulta = "SELECT DISTINCT cidade FROM planos";
		$resultado = mysqli_query($conexao,$consulta)
		or die ("Falha na execução da consulta");
	
				
	?>
  
  <div class="container-fluid">

    <div class="row ">
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<img class="logo_index" src="img/logo_index.png">
			<p class="text_welcome"> SEJA BEM VINDO!</p>
			<form class="form-login" method="post" action="main.php">
			<div class="form-group">
				<label class="Inputlogin">Selecione uma cidade:</label>
				<div class="row">
				<div class="col-md-9 div-select ">
				<select id="cidade" name="cidade">
				<?php while($escrever=mysqli_fetch_array($resultado)){ ?>
					<option><?php echo $escrever['cidade'];?></option>
				<?php }?>
				</select>
				</div>
				<div class="col-md-3">
				<button type="submit" class="btn btn-primary btn-danger">></button>
			</div>
			</div>
			</div>
			</form> 
      </div>
    </div>
      
   
   </div>

  
  
	

 <!-- Central Modal Medium Info -->


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
