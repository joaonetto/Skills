<?php include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
      actar.tb_questions.desQuestions,
      actar.tb_questions_softskills_answers.answerFuncSoftSkills
    FROM (( actar.tb_questions_softskills_answers
      INNER JOIN actar.tb_funcionarios  on actar.tb_funcionarios.idFuncionario  = actar.tb_questions_softskills_answers.idFuncionario )
      INNER JOIN actar.tb_questions     on actar.tb_questions.idQuestions			  = actar.tb_questions_softskills_answers.idQuestions )
    WHERE
          ( actar.tb_questions_softskills_answers.idSurvey       = ' . $GLOBALS['$analiseSurvey'] . ' )
      and ( actar.tb_questions_softskills_answers.idSoftSkills   = ' . $idSoftSkillsFunc[0] . ' )
      and ( actar.tb_questions_softskills_answers.idFuncionario  = ' . $idSoftSkillsFunc[1] . ' )
      and ( actar.tb_funcionarios.analiseFuncionario = 1 )
    ORDER BY
      actar.tb_questions.desQuestions ASC;');
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $idSoftSkillsFunc[4] ?>
      <br>
      <?php echo $idSoftSkillsFunc[5] ?>
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
            <li class='text-red'><strong>Vermelho</strong>: Valores abaixo da média. Valor 1;</li>
            <li class='text-green'><strong>Verde</strong>: Valor Médio. 2;</li>
            <li class='text-blue'><strong>Azul</strong>: Valor acima da média. Valor 3.</li>
          </ul>
          <br>
          <br>
          Para maiores detalhes sobre as respostas individuais de <?php echo $idSoftSkillsFunc[4] ?>, verifique os dados abaixo:
          <br>
          <br>
          <ul>
            <li>Total de Questões: <p class = 'text-bold'><?php echo $idSoftSkillsFunc[2] ?></p></li>
            <li>Total de Pontos disponíveis pela Tecnologia: <p class = 'text-bold'><?php echo intval($idSoftSkillsFunc[2] * 3) ?></p></li>
            <br>
            <li class='text-bold'>Análise Individual para a Área de Tecnologia:</li>
            <ul>
              <li>Total de Pontos: <p class = 'text-bold'><?php echo $idSoftSkillsFunc[3] ?></p></li>
              <li>Percentual das Respostas: <p class = 'text-bold'><?php echo number_format((($idSoftSkillsFunc[3] / ($idSoftSkillsFunc[2] * 3)) * 100), 2, ".", "") ?>%</p></li>
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
        if (intval($column['answerFuncSoftSkills']) == 1 ){
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-red">';
        } elseif (intval($column['answerFuncSoftSkills']) == 2 ) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-green">';
        } elseif (intval($column['answerFuncSoftSkills']) == 3) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-blue">';
        }
      echo $column['answerFuncSoftSkills'] . '</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '   </div>';
      echo '  </div>';
      echo '</div>';
    }

    unset(
      $sql,
      $result1,
      $idSoftSkillsFunc,
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
