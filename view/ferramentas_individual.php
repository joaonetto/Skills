<?php include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
      actar.tb_funcionarios.nomeFuncionario,
      actar.tb_questions.desQuestions,
      actar.tb_questions_ferramentas_answers.answerFuncFerramenta,
      actar.tb_ferramentas.nomeFerramenta
    FROM ((( actar.tb_questions_ferramentas_answers
      INNER JOIN actar.tb_funcionarios  on actar.tb_funcionarios.idFuncionario  = actar.tb_questions_ferramentas_answers.idFuncionario )
      INNER JOIN actar.tb_questions     on actar.tb_questions.idQuestions       = actar.tb_questions_ferramentas_answers.idQuestions )
      INNER JOIN actar.tb_ferramentas   on actar.tb_ferramentas.idFerramenta    = actar.tb_questions_ferramentas_answers.idFerramenta)
    WHERE
          ( actar.tb_questions_ferramentas_answers.idSurvey = ' . intval($GLOBALS['$analiseSurvey']) . ' )
      and ( actar.tb_funcionarios.analiseFuncionario        = 1 )
      and ( actar.tb_questions.idQuestions                  = ' . $idFerrQuestion[0] . ' )
    ORDER BY
      actar.tb_questions_ferramentas_answers.answerFuncFerramenta DESC,
      actar.tb_funcionarios.nomeFuncionario ASC;');
  $idFerrQuestion[2] = $result1[0][3];
  $idFerrQuestion[3] = $result1[0][1];
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $idFerrQuestion[2] ?>
      <br>
      <?php echo $idFerrQuestion[3] ?>
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
            <div id="graphTipoA1" class="graphTipoA" ChartValues="<?php echo $idFerrQuestion[1] ?>"></div>
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
      if (intval($column['answerFuncFerramenta']) < 3 ){
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-red">';
      } elseif (intval($column['answerFuncFerramenta']) == 3 ) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-green">';
      } elseif (intval($column['answerFuncFerramenta']) > 3) {
        echo '<div class="col-md-1 cabecalho-tabela-funcionario-individual text-blue">';
      }
      echo $column['answerFuncFerramenta'] . '</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
    }
    unset(
      $sql,
      $result1,
      $idFerrQuestion,
      $column
    );
  ?>
      </div>
    </div>
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
