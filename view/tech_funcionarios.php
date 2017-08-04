<?php include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
  	   actar.tb_questions.desQuestions,
      actar.tb_questions_tech_area_answers.answerFuncTechArea
    FROM (( actar.tb_questions_tech_area_answers
      INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario		= actar.tb_questions_tech_area_answers.idFuncionario )
      INNER JOIN actar.tb_questions		on actar.tb_questions.idQuestions			= actar.tb_questions_tech_area_answers.idQuestions )
    WHERE
          ( actar.tb_questions_tech_area_answers.idSurvey = ' . $GLOBALS['$analiseSurvey'] . ' )
  	  and ( actar.tb_questions_tech_area_answers.idTech_Area   = ' . $idTechFunc[0] . ' )
      and ( actar.tb_questions_tech_area_answers.idFuncionario = ' . $idTechFunc[1] . ' )
      and ( actar.tb_funcionarios.analiseFuncionario = 1 )
    ORDER BY
  	  actar.tb_questions.desQuestions ASC;');
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $idTechFunc[4] ?>
      <br>
      <?php echo $idTechFunc[5] ?>
      <br>
      <br>
    </h1>
    <div class="panel panel-default">
      <div class="panel-heading">Informações sobre a Análise</div>
      <div class="panel-body">
        <div class="panel-espaco-interno">
          Os valores abaixo estão representados por cores, sendo que:
          <br>
          <br>
          <ul>
            <li class='text-red'><strong>Vermelho</strong>: Valores abaixo da média. Entre (1 e 2);</li>
            <li class='text-green'><strong>Verde</strong>: Valor Médio. 3;</li>
            <li class='text-blue'><strong>Azul</strong>: Valor acima da média. Entre (4 e 5).</li>
          </ul>
          <br>
          <br>
          Para maiores detalhes sobre as respostas individuais de <?php echo $idTechFunc[4] ?>, verifique os dados abaixo:
          <br>
          <br>
          <ul>
            <li>Total de Questões: <p class = 'text-bold'><?php echo $idTechFunc[2] ?></p></li>
            <li>Total de Pontos disponíveis pela Tecnologia: <p class = 'text-bold'><?php echo intval($idTechFunc[2] * 5) ?></p></li>
            <br>
            <li class='text-bold'>Análise Individual para a Área de Tecnologia:</li>
            <ul>
              <li>Total de Pontos: <p class = 'text-bold'><?php echo $idTechFunc[3] ?></p></li>
              <li>Percentual das Respostas: <p class = 'text-bold'><?php echo number_format((($idTechFunc[3] / ($idTechFunc[2] * 5)) * 100), 2, ".", "") ?>%</p></li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br>
  <?php
    foreach ($result1 as $column) {
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading">' . $column['desQuestions'] . '</div>';
      echo '	<div class="panel-body">';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Resultado</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
        if (intval($column['answerFuncTechArea']) < 3 ){
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-red">';
        } elseif (intval($column['answerFuncTechArea']) == 3 ) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-green">';
        } elseif (intval($column['answerFuncTechArea']) > 3) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-blue">';
        }
      echo $column['answerFuncTechArea'] . '</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '   </div>';
      echo '  </div>';
      echo '</div>';
    }

    unset(
      $sql,
      $result1,
      $idTechFunc,
      $column
    );
  ?>
  <br>
  <br>
  </div>
</section>
</body>
</html>
<?php
  $time_end = microtime(true);

  $time = $time_end - $time_start;
  echo 'Processado e Carregado em: ' . $time;
 ?>
