<?php
	$sql = new Sql();
	$result1 = $sql->select("
		SELECT
			actar.tb_vendors.idVendor, actar.tb_vendors.nomeVendor
		FROM
			actar.tb_vendors
		ORDER BY
			actar.tb_vendors.nomeVendor ASC;");
	$result2 = $sql->select("
		SELECT
			actar.tb_tech_area.idTech_Area, actar.tb_tech_area.nomeTech_Area
		FROM
			actar.tb_tech_area
		ORDER BY
			actar.tb_tech_area.nomeTech_Area ASC;");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ACTAR - Survey da Área de Tecnologia</title>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/Bootstrap/css/bootstrap.min.css">
		<script src="lib/jQuery/jquery-3.2.1.min.js"></script>
		<script src="lib/Bootstrap/js/bootstrap.min.js"></script>
		<script src="../lib/htmlBarGraph/html5-canvas-bar-graph.js"></script>
    <link rel="stylesheet" href="../include/css/skills.css">
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
								<?php
								foreach ($result1 as $column) {
									echo '<li><a href="vendors-'. $column['idVendor'] .'">' . $column['nomeVendor'] . '</a></li>';
								}
								?>
                  <li class="divider"></li>
                  <li><a href="vendors-0">Resumo Fabricantes</a></li>
              </ul>
          </div>
          <div class="btn-group">
              <button type="button" data-toggle="dropdown" class="btn btn-sm btn-primary dropdown-toggle">Questões por Tecnologia <span class="caret"></span></button>
              <ul class="dropdown-menu dropdown-menu-right">
								<?php
								foreach ($result2 as $column) {
									echo '<li><a href="tech-'. $column['idTech_Area'] .'">' . $column['nomeTech_Area'] . '</a></li>';
								}
								?>
                  <li class="divider"></li>
                  <li><a href="#">Resumo Tecnologia</a></li>
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
