<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select("
    SELECT
      actar.tb_tech_area.nomeTech_Area
    FROM
      actar.tb_tech_area
    WHERE
          ( actar.tb_tech_area.idTech_Area = $id_func );");
  $result1 = $result1[0][0];
  $result2 = $sql->select('
    SELECT
      actar.tb_questions.idQuestions, actar.tb_questions.desQuestions
    FROM (( actar.tb_questions_tech_area
      INNER JOIN actar.tb_survey    on actar.tb_survey.idSurvey         = actar.tb_questions_tech_area.idSurvey )
      INNER JOIN actar.tb_questions on actar.tb_questions.idQuestions   = actar.tb_questions_tech_area.idQuestions )
    WHERE
          ( actar.tb_survey.idSurvey                  = ' . intval($GLOBALS['$analiseSurvey']) . ' )
      and ( actar.tb_questions_tech_area.idTech_Area  = ' . $id_func . ' )
    ORDER BY
      actar.tb_questions.desQuestions ASC;');
?>

<section>
  <div id="corpo">
    <h1>Questões Destinadas a Tecnologia: <?php echo $result1 ?></h1>
    <br>
    <h5>
      Para cada área de interesse da pesquisa, foi informado aos participantes que pontuassem seguindo a regra abaixo, veja:
    </h5>
    <h3>
        Tecnica e Tecnologia
    </h3>
    <h5>
      1 - Não tenho conhecimento de tal Técnica / Tecnologia a ponto de poder opinar;<br>
      2 - Meu conhecimento é inicial, e tenho ainda muitas dúvidas sobre o tema;<br>
      3 - Entendo seu funcionamento e consigo empregar tal Técnica / Tecnologia em minhas Pré-Vendas;<br>
      4 - O meu conhecimento permite ajudar outros e consigo empregar tal conhecimento em Delivery;<br>
      5 - Sou capaz de discutir sobre o tema e por isto me capacita a participar de um nível de Suporte.<br>
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $Count2 = 1;
    $myAnswers_Tech = Array();
    foreach ($result2 as $column) {
      for ($Count1 = 1; $Count1 <= 5; $Count1++){
        $result3 = $sql->select('
          SELECT
            COUNT( actar.tb_questions_tech_area_answers.answerFuncTechArea )
          FROM ( actar.tb_questions_tech_area_answers
            INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario		= actar.tb_questions_tech_area_answers.idFuncionario)
          WHERE
                ( actar.tb_questions_tech_area_answers.idSurvey = ' . intval($GLOBALS['$analiseSurvey']) . ' )
            and ( actar.tb_funcionarios.analiseFuncionario = 1 )
            and ( actar.tb_questions_tech_area_answers.idTech_Area = ' . $id_func . ')
            and ( actar.tb_questions_tech_area_answers.idQuestions = ' . $column['idQuestions'] . ' )
            and ( actar.tb_questions_tech_area_answers.answerFuncTechArea = ' . $Count1 . ');');
        $myAnswers_Tech[$Count1] = $result3[0][0];
      }

      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading">' . $column['desQuestions'] . '</div>';
      echo '	<div class="panel-body">';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-titulo">Gráfico</div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '      <div id="graphTipoA' . $Count2++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Tech) . '"></div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
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
<script src="../include/js/ChartA.js"></script>
<?php
  $time_end = microtime(true);

  $time = $time_end - $time_start;
  echo 'Processado e Carregado em: ' . $time;
?>
