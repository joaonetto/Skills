<?php include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
      actar.tb_funcionarios.nomeFuncionario,
      actar.tb_questions.desQuestions,
      actar.tb_questions_softskills_answers.answerFuncSoftSkills,
      actar.tb_softskills.nomeSoftSkills
    FROM ((( actar.tb_questions_softskills_answers
      INNER JOIN actar.tb_funcionarios  on actar.tb_funcionarios.idFuncionario  = actar.tb_questions_softskills_answers.idFuncionario )
      INNER JOIN actar.tb_questions     on actar.tb_questions.idQuestions       = actar.tb_questions_softskills_answers.idQuestions )
      INNER JOIN actar.tb_softskills	on actar.tb_softskills.idSoftSkills    	= actar.tb_questions_softskills_answers.idSoftSkills)
    WHERE
          ( actar.tb_questions_softskills_answers.idSurvey = ' . $GLOBALS['$analiseSurvey'] . ' )
      and ( actar.tb_funcionarios.analiseFuncionario        = 1 )
      and ( actar.tb_questions.idQuestions                  = ' . $idSkillsQuestion[0] . ' )
    ORDER BY
      actar.tb_questions_softskills_answers.answerFuncSoftSkills DESC,
      actar.tb_funcionarios.nomeFuncionario ASC;');
  $idSkillsQuestion[2] = $result1[0][3];
  $idSkillsQuestion[3] = $result1[0][1];
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $idSkillsQuestion[2] ?>
      <br>
      <?php echo $idSkillsQuestion[3] ?>
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
            <li class='text-red'><strong>Vermelho</strong>: Resposta <strong><ins>NÃO.</ins></strong> Valor da Resposta é 1;</li>
            <li class='text-green'><strong>Verde</strong>: Resposta <strong><ins>SIM. Parcialmente.</ins></strong> Valor da Resposta é 2;</li>
            <li class='text-blue'><strong>Azul</strong>: Resposta <strong><ins>SIM. Completamente.</ins></strong> Valor da Resposta é 3.</li>
          </ul>
          <div class="row">
            <div class="col-md-4 cabecalho-vazio"></div>
            <div class="col-md-4 cabecalho-tabela">Resultado</div>
            <div class="col-md-4 cabecalho-vazio"></div>
          </div>
          <div class="row">
            <div class="col-md-4 cabecalho-vazio"></div>
            <div id="graphTipoA1" ChartValues="<?php echo $idSkillsQuestion[1] ?>"></div>
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
      if (intval($column['answerFuncSoftSkills']) == 1 ){
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-red">';
      } elseif (intval($column['answerFuncSoftSkills']) == 2 ) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-green">';
      } elseif (intval($column['answerFuncSoftSkills']) == 3) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-blue">';
      }
      echo $column['answerFuncSoftSkills'] . '</div>';
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
