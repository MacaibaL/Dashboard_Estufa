<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <!-- Estilização -->
  <link rel="stylesheet" href="main.css" class="css">

  <title>SENSOR</title>
</head>

<body>

  <nav class=" navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <i class="navbar-brand d-inline-block align-top">Bem Vindo!</i>
      <a class=" btn btn-danger" href="logout.php" style="border-radius: 15px 15px">Exit</a>
  </nav>
  <p></p>

  <div class="container pt-4">

    
    <div class="row">

      <div class="carde mx-auto" onmouseover="temperatura_atual()" >
        <div class="face face1">
          <div class="content">
            <div class="icon">
              <i class="fab fa-linkedin" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3 id="potencia">
              
            </h3>
            <p>This is where I network and build my professional protfolio.</p>
          </div>
        </div>
      </div>
      
      <div class="carde mx-auto " onmouseover="umidade_atual()">
        <div class="face face1">
          <div class="content">
            <div class="icon">
            <i class="fab fa-twitter-square" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3 id="umidade">
        
            </h3>
            <p>This is where I read news and network with different social groups.</p>
          </div>
        </div>
      </div>
      
      <div class="carde mx-auto" onmouseover="luminosidade_atual()">
        <div class="face face1">
          <div class="content">
            <div class="icon">
            <i class="fab fa-github-square" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3 id="luminosidade">
              
            </h3>
            <p>This is where I share code and work on projects.</p>
          </div>
        </div>
      </div>

    </div>
    
    <div class="row mt-4">
      <div class="mx-auto" id="line_div"></div>
    </div>
    
    <div class="row">
      <div class="mx-auto" id="piechart_div"></div>
      <div class="mx-auto" id="bar_div"></div>
    </div>
    
    <div class="row my-4">
      
      <button type="button" class="btn btn-danger" onclick="teste()" data-toggle="modal" data-target="#valores">Listar Valores</button>

      <!-- Modal -->
      <div class="modal fade" id="valores">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Valores Medidos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Poten</th>
                    <th>Data</th>
                    <th>Hora</th>
                  </tr>
                </thead>
                <tbody id="tabelaDados">
                  <!-- Tabela de dados -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
  
  
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  
  <script src="js/ajaxGetPost.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/charts.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
</body>

</html>