



<html>
    <html lang="pt-br">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <head>
        <title>pag1
        </title>
        <meta charset="utf-8">
      </head>
      <body class="text-center">
      <nav class="navbar navbar-expand-lg navbar-black bg-dark ">
            <div class="col-md-6 offset-md-3 container-fluid ">
              <a class="navbar-brand" href="#">Projeto Formulario</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/primeira/pagina.html">Página inicial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/primeira/form.html">Formulario</a>
                  </li>
                  
                </ul>
              
              </div>
            </div>
          </nav>
    

 
    <?php
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];



    echo " <br> <br> <br> <br> <strong> seu email é '.$email.'  <br> e sua mensagem é '.$mensagem.';";

    
    ?>

























