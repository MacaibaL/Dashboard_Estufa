<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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

  <div class="container">

    
    <div class="row">

      <div class="carde mx-auto">
        <div class="face face1">
          <div class="content">
            <div class="icon">
              <i class="fab fa-linkedin" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3>
              <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">_adamdipinto</a>
            </h3>
            <p>This is where I network and build my professional protfolio.</p>
          </div>
        </div>
      </div>
      
      <div class="carde mx-auto">
        <div class="face face1">
          <div class="content">
            <div class="icon">
            <i class="fab fa-twitter-square" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3>
              <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
            </h3>
            <p>This is where I read news and network with different social groups.</p>
          </div>
        </div>
      </div>
      
      <div class="carde mx-auto">
        <div class="face face1">
          <div class="content">
            <div class="icon">
            <i class="fab fa-github-square" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <h3>
              <a href="https://github.com/atom888" target="_blank">atom888</a>
            </h3>
            <p>This is where I share code and work on projects.</p>
          </div>
        </div>
      </div>

    </div>
    
    <div class="row">
    ola
    </div>
    
    <div class="row">
    hello
    </div>
    
    <div class="row">
      
      <button type="button" class="btn btn-danger" onclick="teste()" data-toggle="modal" data-target="#valores">Listar Sensores</button>

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

  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>