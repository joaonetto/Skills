<!DOCTYPE html>
<html>
	<head>
		<title>ACTAR - Survey da Área de Tecnologia</title>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../lib/Bootstrap/css/bootstrap.min.css">
		<script src="../lib/jQuery/jquery-3.2.1.min.js"></script>
		<script src="../lib/Bootstrap/js/bootstrap.min.js"></script>
		<script src="../lib/htmlBarGraph/html5-canvas-bar-graph.js"></script>
    <link rel="stylesheet" href="../include/css/skills2.css">
	</head>
	<body>
		<header>
      <div class="container-logotipo">
        <img id="logotipo" src="../include/img/ACTAR.png" alt="logotipo">
      </div>
      <div id="frasetopo" class="header-black">
        <h1>Análise de Skills ACTAR</h1>
      </div>
      <div class="header-topo">
        <div class="header-menu">
          <a class="btn btn-sm btn-success" href="index.php" role="button">Inicio</a>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle">Questões por Fabricantes<span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="vendors-1">Checkpoint</a></li>
                  <li><a href="vendors-2">Cisco</a></li>
                  <li><a href="vendors-3">Juniper</a></li>
                  <li><a href="vendors-4">Pulse Secure</a></li>
									<li><a href="vendors-5">Radware</a></li>
                  <li><a href="vendors-6">Symantec</a></li>
                  <li class="divider"></li>
                  <li><a href="vendors-0">Todos</a></li>
              </ul>
          </div>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
              </ul>
          </div>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-success dropdown-toggle">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
              </ul>
          </div>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
              </ul>
          </div>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-danger dropdown-toggle">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
              </ul>
          </div>
        </div>
				<div class="header-copyright">
					<div class="copyright">
						<p class="pull-right text-roxo">Powered by ACTAR Technologies. All rights reserved.<br>Created by JNetto</p>
					</div>
				</div>
      </div>
		</header>
    <section>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Checkpoint</strong></div>
        <div class="panel-body">
          <div class="panel-espaco-interno">
            <div class="row">
              <div class="col-md-12 cabecalho-tabela">Grafico</div>
            </div>
            <div class="row">
              <div class="col-md-4 cabecalho-individual">Pré-Vendas</div>
              <div class="col-md-4 cabecalho-individual">Delivery</div>
              <div class="col-md-4 cabecalho-individual">Suporte</div>
            </div>
            <div class="row">
              <div id="graphTipoB1" ChartValues="1, 3, 7, 5, 2"></div>
              <div id="graphTipoB2" ChartValues="10, 9, 7, 5, 2"></div>
              <div id="graphTipoB3" ChartValues="30, 12, 32, 41, 2"></div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12 cabecalho-tabela">Ranking</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default panel-default-tipoB">
        <div class="panel-heading"><strong>Cisco</strong></div>
        <div class="panel-body panel-tipoB">
          <div class="panel-espaco-interno">
            <div class="row">
              <div class="col-md-12 cabecalho-tabela">Grafico</div>
            </div>
            <div class="row">
              <div class="col-md-4 cabecalho-individual">Pré-Vendas</div>
              <div class="col-md-4 cabecalho-individual">Delivery</div>
              <div class="col-md-4 cabecalho-individual">Suporte</div>
            </div>
            <div class="row">
              <div id="graphTipoB4" ChartValues="1, 3, 7, 5, 2"></div>
              <div id="graphTipoB5" ChartValues="10, 9, 7, 5, 2"></div>
              <div id="graphTipoB6" ChartValues="30, 12, 32, 41, 2"></div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12 cabecalho-tabela">Ranking</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
              <div class="col-md-2 cabecalho-ranking">Funcionario</div>
              <div class="col-md-2 cabecalho-ranking">Posicao</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Antonio</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Jose</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
            <div class="row">
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">10</div>
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">20</div>
              <div class="col-md-2 cabecalho-ranking-result">Marcelo</div>
              <div class="col-md-2 cabecalho-ranking-result">30</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
    </footer>
  </body>
</html>
<script src="../include/js/ChartTeste.js"></script>
