
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">


  <!-- Bootstrap core CSS -->
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.css" rel="stylesheet">

<!--  <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
	<?php
		include("conexao.php");
		
		$usuario = $_POST['cpf'];
		$consulta = "SELECT * FROM planos WHERE cidade = '$usuario'";
		$resultado = mysqli_query($conexao,$consulta)
		or die ("Falha na execução da consulta");
	
				
	?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
		<div class="row networks">
			<div class="col-md-4 col-sm-5 col-lg-4 "><img src="img/pin.png" width=20 height=20> Você esta em: <?php echo $usuario; ?></div>
			<div class="offset-md-7 col-md-1 hidden-xs icons-networks">
				<a href="index.php"><img src="img/instagram.png" alt="instagram"></a>
				<a href="index.php"><img src="img/whatsapp.png" alt="whatsapp"></a>
				<a href="index.php"><img src="img/facebook.png" alt="facebook"></a>
			</div>
		</div>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			
		</div>
	  <a href="index.php"><img src="img/logo2.png" alt="some text" class="nav-logo"></a>
      <div id="navbar" class="collapse navbar-collapse nav-options">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#about">Quem somos</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="#contact">Dicas</a></li>
          <li class="active"><a href="#contact">Area Do Cliente</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container-fluid">
		
  
  
    <!-- Slider -->
	<div class="row">
	 <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/1.png"  alt="Flower">
    </div>
    <div class="item">
      <img src="img/1.png" alt="Flower">
    </div>
    <div class="item">
      <img src="img/1.png" alt="Flower">
    </div>
  </div>
  </div>
  </div>

    <!-- Slider -->

      <div class="row advertising">
      <div class="col-md-6">
      <h5 class="title-advertising">Mais Velocidade na
      <p class="title-home">sua casa</p></h5>
      <p class="subtitle-advertising">Internet rápida e confiável para você e sua familia!</p>
	  
	  </div>
	  <div class="col-md-5 offset-md-1">
		<img class="img-advertising" src="img/tv.png">
	  </div>
	  </div>
	  
      <div class="row">
      
	  </div>
	  <!-- Fim Slider -->
	  <!-- Planos -->
	  <div class="row planos">
	    <div class="col-md-12">
	  <p class="title-planos">planos</p>
	</div>
	  <?php while($escrever=mysqli_fetch_array($resultado)){ ?>
		  <div class="col-md-3 planos-card">
			<div class="card">
				<div class="card-header">
				<?php echo $escrever['velocidade']; ?></br>MEGA</div>
			<div class="card-body text-primary">
				<h5 class="card-text"><img src="img/wifi.png" width=20 height=20>  <?php echo $escrever['descricao1']; ?></h5>
				<h5 class="card-text"><img src="img/wifi.png" width=20 height=20>  <?php echo $escrever['descricao2']; ?></h5>
				<h5 class="card-text"><img src="img/wifi.png" width=20 height=20>  <?php echo $escrever['descricao3']; ?></h5>
				
				<p class="card-value">R$ <?php echo $escrever['valor'];?></p>
				<form class="form-login" method="post" action="#subscribeModal">
				<a type="button" class="btn btn-subscribe" data-toggle="modal" data-target="#subscribeModal">Assine já</a>
				</form>				
			</div>
			</div>
		  </div>
		  <?php 
			 } ?>
		 </div>
	  <div class="row benefits ">
	  <div class="col-md-12">
	  <p class="title">Conheça nossas vantagens</p>
	</div>
      <div class="col-md-4 benefits-card">
		<img src="img/wifi.png" class="benefits-icon" width=100 height=100>
		<p class="title-benefits">Lorem ipsum dolor</p>
		<p class="subtitle-benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae felis lectus. Etiam porttitor nisl dui, commodo mattis ligula faucibus at.</p>
	  </div>
	  
	  <div class="col-md-4 benefits-card">
		<img src="img/wifi.png" class="benefits-icon" width=100 height=100>
		<p class="title-benefits">Lorem ipsum dolor</p>
		<p class="subtitle-benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae felis lectus. Etiam porttitor nisl dui, commodo mattis ligula faucibus at.</p>
	  </div>
	  
	  <div class="col-md-4 benefits-card">
		<img src="img/wifi.png" class="benefits-icon" width=100 height=100>
		<p class="title-benefits">Lorem ipsum dolor</p>
		<p class="subtitle-benefits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae felis lectus. Etiam porttitor nisl dui, commodo mattis ligula faucibus at.</p>
	  </div>
	  
	  
      
  </div>
	<div class="row call">
      <div class="offset-md-1 col-md-4 col-12">
      <h5 class="title-call">Nós ligamos
      <p class="title-housecall">para Você</p></h5>
      <p class="subtitle-call">Prencha seu telefone e aguarde entramos em contato.</p>
	  
	  </div>
	  <div class="col-md-5 col-12 offset-md-1 div-call">
	  <div class="row">
		<div class="offset-md-1 col-md-6 col-8 ">
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
				</div>
				<div class="col-md-3 col-4"><button type="submit" class="btn btn-call">Enviar</button>
		
			</div>
			</div>
	  </div>
	  </div>
	  <div class="modal fade text-center" style="top:50px; height:100%;" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="img/wifi.png" class="modal-img" width=100 height=100>
                <h3 class="pt-5 mb-0 text-secondary">Clique aqui para emitir seu contrato.</h3>
				<a href="doc/contrato.pdf" class="btn btn-outline-danger btn-custom" target="_blank">Contrato de serviço</a>
				<a href="doc/contrato_comodato.pdf" class="btn btn-outline-danger btn-custom" target="_blank">Contrato Comodato</a>
                </div>
        </div>
    </div>
</div>
	  <div class="row">
		<footer>							
		<?php include("footer.php")?>
					
		</footer>							
										  
										  
  </div>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
