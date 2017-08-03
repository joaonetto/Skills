<?php include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
      actar.tb_funcionarios.nomeFuncionario,
      actar.tb_questions.desQuestions,
      actar.tb_questions_tech_area_answers.answerFuncTechArea,
      actar.tb_tech_area.nomeTech_Area
    FROM ((( actar.tb_questions_tech_area_answers
      INNER JOIN actar.tb_funcionarios  on actar.tb_funcionarios.idFuncionario  = actar.tb_questions_tech_area_answers.idFuncionario )
      INNER JOIN actar.tb_questions     on actar.tb_questions.idQuestions       = actar.tb_questions_tech_area_answers.idQuestions )
      INNER JOIN actar.tb_tech_area     on actar.tb_tech_area.idTech_Area       = actar.tb_questions_tech_area_answers.idTech_Area )
    WHERE
          ( actar.tb_questions_tech_area_answers.idSurvey = ' . intval($GLOBALS['$analiseSurvey']) . ' )
      and ( actar.tb_funcionarios.analiseFuncionario = 1 )
      and ( actar.tb_questions.idQuestions = ' . $idTechQuestion[0] . ')
    ORDER BY
      actar.tb_questions_tech_area_answers.answerFuncTechArea DESC,
      actar.tb_funcionarios.nomeFuncionario ASC;');
  $idTechQuestion[2] = $result1[0][3];
  $idTechQuestion[3] = $result1[0][1];
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $idTechQuestion[2] ?>
      <br>
      <?php echo $idTechQuestion[3] ?>
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
          <div class="row">
            <div class="col-md-4 cabecalho-vazio"></div>
            <div class="col-md-4 cabecalho-tabela">Resultado</div>
            <div class="col-md-4 cabecalho-vazio"></div>
          </div>
          <div class="row">
            <div class="col-md-4 cabecalho-vazio"></div>
            <div id="graphTipoA1" ChartValues="<?php echo $idTechQuestion[1] ?>"></div>
            <div class="col-md-4 cabecalho-vazio"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 cabecalho-vazio"></div>
            <div class="col-md-3 cabecalho-tabela">Funcionario</div>
            <div class="col-md-1 cabecalho-tabela">Nota</div>
            <div class="col-md-4 cabecalho-vazio"></div>
          </div>
  <?php
    foreach ($result1 as $column) {
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-3 cabecalho-tabela-funcionario-individual">' . $column['nomeFuncionario'] . '</div>';
      if (intval($column['answerFuncTechArea']) < 3 ){
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-red">';
      } elseif (intval($column['answerFuncTechArea']) == 3 ) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-green">';
      } elseif (intval($column['answerFuncTechArea']) > 3) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-blue">';
      }
      echo $column['answerFuncTechArea'] . '</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
    }

    unset($result1, $result2, $total_result1, $total_result2, $column, $sql, $myAnswers_Pre, $myAnswers_Del, $myAnswers_Sup);
  ?>
      </div>
    </div>
  <br>
  </div>
</section>
</body>
</html>


<script src="../include/js/ChartA.js"></script>
<?php
  $time_end = microtime(true);

  $time = $time_end - $time_start;
  echo 'Processado e Carregado em: ' . $time;
?>
