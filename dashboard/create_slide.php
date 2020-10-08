<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Cadastro de arquivos</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <h1> Upload do Blog</h1>
        <hr/><br/>
        <form enctype="multipart/form-data" method="post">
            <label>Arquivo</label>
            <input type="file" name="arquivo" class="form-control"/>
      <label>titulo</label>
            <input type="hidden" name="titulo" size="30" class="form-control" >
      <label>Descrição</label>
            <input type="text" name="descricao" size="30" class="form-control" >
            <label>Texto</label>
            <input type="textarea" name="texto" size="30" class="form-control" >
      <label>Descrição Imagem</label>
            <input type="text" name="descimagem" size="30" class="form-control" >
      
            <button type="submit" class="btn">Enviar arquivo</button>
        </form>

        <?php
        if ($_POST) {        
            include("dadosconexao.php");
      
            $arquivo = $_FILES["arquivo"]["tmp_name"]; 
            $tamanho = $_FILES["arquivo"]["size"];
            $tipo    = $_FILES["arquivo"]["type"];
            $nome  = $_FILES["arquivo"]["name"];
            $descimagem  = $_POST["descimagem"];

            if ( $arquivo != "none" )
            {
                $fp = fopen($arquivo, "rb");
                $conteudo = fread($fp, $tamanho);
                $conteudo = addslashes($conteudo);
                fclose($fp);                 
                
                
                try { 
                     $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
               $comandoSQL = "INSERT INTO slide VALUES (0,'$nome','$conteudo','$tipo')";
               $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
               $grava->execute(array());                                          
                     echo '<br/><div class="alert alert-success" role="alert">
                                Arquivo enviado com sucesso para o servidor!
                            </div>';
              } catch(PDOException $e) { // caso retorne erro
                     
                     echo '<br/><div class="alert alert-success" role="alert">
                                Erro ' . $e->getMessage() . 
                          '</div>';
              }
            }}
    ?>
        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
</body>

</html>

