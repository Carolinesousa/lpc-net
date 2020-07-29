
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
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	 <link href="css/custom.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-headerw").find(".fa").addClass("fa-arrow-up").removeClass("fa-arrow-down");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-headerw").find(".fa").removeClass("fa-arrow-down").addClass("fa-arrow-up");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-headerw").find(".fa").removeClass("fa-arrow-up").addClass("fa-arrow-down");
        });
    });
</script>
</head>

<body>
	
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
		<div class="row networks">
			<div class="col-md-4 col-sm-5 col-lg-4 "><img src="img/pin.png" width=20 height=20> Você esta em: </div>
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
  	<div class="row contact">
  	<div class="offset-md-1 col-md-4">
  		<h5 class="title-contact">Contact us</h5>
  		<p class="subtitle-contact">
  			<p><i class="fa fa-map-marker"></i>R. Roseno de Matos, 105 - Centro, Antonina do Norte</p>
  			<p><i class="fa fa-map-marker"></i>(88) 3525-1210 (88) 99276-1815</p>
			<p><i class="fa fa-whatsapp"></i>(88) 99400-5699 - WhatsApp </p>
  			<p><i class="fa fa-envelope-o"></i>R. Roseno de Matos, 105 - Centro, Antonina do Norte</p>
  			
  		</p>
	  
  	</div>
  	<div class="offset-md-1 col-md-5 margin">
		     	<div class="form-group">
		    <input type="input" class="form-control" id="exampleInputPassword1" placeholder="Nome">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		    <small id="emailHelp" class="form-text text-muted">Ex: nome@gmail.com</small>
		  </div>
		  
		  <div class="form-group">
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Escreva algo...</textarea>
		  </div>
		  <button type="submit" class="btn btn-cont">Submit</button>
		</form>
   </div>

  </div>
  <div class="row map">
  
  </div>
<div class="row contactus">
  	<div class=" offset-md-1 col-md-10">
  		<h5 class="title-faq">Perguntas Frequentes</h5>
  	</div>

  	<div class="offset-md-1 col-md-8 ">
          <div class="accordion" id="accordionExample">
        <div class="card-faq">
            <div class="card-headerw" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"> What is HTML? <i class="fa fa-arrow-down rigth"></i></button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-bodyf">
                    <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="card-faq">
            <div class="card-headerw" id="headingd">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsed"><i class="fa fa-arrow-down <p>"></i> What is CSS?</button>                     
                </h2>
            </div>
            <div id="collapsed" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-bodyf">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
            </div>
        <div class="card-faq">
            <div class="card-headerw" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-arrow-down rigth"></i> What is CSS?</button>                     
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-bodyf">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
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
