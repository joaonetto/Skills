<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select("
    SELECT
      actar.tb_softskills.nomeSoftSkills
    FROM
      actar.tb_softskills
    WHERE
      actar.tb_softskills.idSoftSkills = $id_func;");
  $result1 = $result1[0][0];

  $result2 = $sql->select('
    SELECT
      actar.tb_questions.idQuestions,
      actar.tb_questions.desQuestions
    FROM (( actar.tb_questions_softskills
      INNER JOIN actar.tb_survey    on actar.tb_survey.idSurvey         = actar.tb_questions_softskills.idSurvey )
      INNER JOIN actar.tb_questions on actar.tb_questions.idQuestions   = actar.tb_questions_softskills.idQuestions )
    WHERE
          ( actar.tb_survey.idSurvey                    = ' . intval($GLOBALS['$analiseSurvey']) . ' )
      and ( actar.tb_questions_softskills.idSoftSkills  = ' . $id_func . ' )
    ORDER BY
      actar.tb_questions.desQuestions ASC;');
?>
<section>
  <div id="corpo">
    <h1>Questões Destinadas ao Soft Skill ACTAR: <?php echo $result1 ?></h1>
    <br>
    <h5>
      Para cada área de interesse da pesquisa, foi informado aos participantes que pontuassem seguindo a regra abaixo, veja:
    </h5>
    <h3>
        Soft Skills ACTAR
    </h3>
    <h5>
      1 - Nãor tem tais qualificações<br>
      2 - Sim. Qualificações Parciais;<br>
      3 - Sim. Tem completamente as Qualificações;<br>
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $Count2 = 1;
    $myAnswers_Soft = Array();
    foreach ($result2 as $column) {
      for ($Count1 = 1; $Count1 <= 3; $Count1++){
        $result3 = $sql->select('
        SELECT
          COUNT( actar.tb_questions_softskills_answers.answerFuncSoftSkills )
        FROM ( actar.tb_questions_softskills_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario		= actar.tb_questions_softskills_answers.idFuncionario)
        WHERE
              ( actar.tb_questions_softskills_answers.idSurvey              = ' . $GLOBALS['$analiseSurvey'] . ' )
          and ( actar.tb_funcionarios.analiseFuncionario                    = 1 )
          and ( actar.tb_questions_softskills_answers.idSoftSkills          = ' . $id_func . ' )
          and ( actar.tb_questions_softskills_answers.idQuestions           = ' . $column['idQuestions'] . ' )
          and ( actar.tb_questions_softskills_answers.answerFuncSoftSkills  = ' . $Count1 . ' );');
        $myAnswers_Soft[$Count1] = $result3[0][0];
      }
      //var_dump($myAnswers_Soft);
      //exit;
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading"><a href="ferrquestion-' . $column['idQuestions'] . '-(' . implode(", ",$myAnswers_Soft) . ')">' . $column['desQuestions'] . '</a></div>';
      echo '	<div class="panel-body">';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Gráfico</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div id="graphTipoC' . $Count2++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Soft) . '"></div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '   </div>';
      echo '  </div>';
      echo '</div>';
    }
    unset($result1, $result2, $total_result1, $total_result2, $column, $sql, $myAnswers_Pre, $myAnswers_Del, $myAnswers_Sup);

  ?>
  <br>
  <br>
  </div>
</section>
</body>
</html>
<script src="../include/js/ChartC.js"></script>
<?php
  $time_end = microtime(true);

  $time = $time_end - $time_start;
  echo 'Processado e Carregado em: ' . $time;
?>
