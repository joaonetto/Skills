<?php include_once("header.php");?>
<?php
  $sql = new Sql();
  $result1 = $sql->select("
    SELECT
      actar.tb_funcionarios.nomeFuncionario
    FROM
      actar.tb_funcionarios
    WHERE
      ( actar.tb_funcionarios.idFuncionario ) = $idFunc_IDFunc;");
  $result1 = $result1[0][0];

  $result2 = $sql->select("
    SELECT
      actar.tb_questions_answers.idQuestions, actar.tb_questions_answers.answerFuncionario, actar.tb_questions.desQuestions, actar.tb_questions_answers.idDepartamento
    FROM
      (( actar.tb_questions_answers
        INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario )
        INNER JOIN actar.tb_questions		on actar.tb_questions.idQuestions		= actar.tb_questions_answers.idQuestions )
    WHERE
          ( actar.tb_questions_answers.idVendor         = $idFunc_Vendor )
      and ( actar.tb_questions_answers.idFuncionario 		= $idFunc_IDFunc )
    ORDER BY
    actar.tb_questions.desQuestions           asc,
    actar.tb_questions_answers.idDepartamento asc;");

  $result3 = $sql->select("
    SELECT
      actar.tb_vendors.nomeVendor
    FROM
      actar.tb_vendors
    WHERE
      ( actar.tb_vendors.idVendor ) = $idFunc_Vendor;");
  $result3 = $result3[0][0];

  $result4 = $sql->select("
    SELECT
      count( actar.tb_questions_answers.idQuestions )
    FROM
      actar.tb_questions_answers
    WHERE
          ( actar.tb_questions_answers.idVendor  = $idFunc_Vendor )
      and ( actar.tb_questions_answers.idFuncionario = $idFunc_IDFunc )
      and ( actar.tb_questions_answers.idDepartamento = 1 );");
  $myArrayFuncionario[0] = $result4[0][0];

  for ($Count1 = 1; $Count1 <= 3 ; $Count1++) {
    $result4 = $sql->select("
      SELECT
        SUM( actar.tb_questions_answers.answerFuncionario )
      FROM
        actar.tb_questions_answers
      WHERE
            ( actar.tb_questions_answers.idVendor  = $idFunc_Vendor )
        and ( actar.tb_questions_answers.idFuncionario = $idFunc_IDFunc )
        and ( actar.tb_questions_answers.idDepartamento = $Count1 );");
    $myArrayFuncionario[$Count1] = $result4[0][0];
  }
?>
<section>
  <div id="corpo">
    <h1>Análise das Questões Individuais de
      <br>
      <?php echo $result1 ?>
      <br>
      <?php echo $result3 ?>
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
          Para maiores detalhes sobre as respostas individuais de <?php echo $result1 ?>, verifique os dados abaixo:
          <br>
          <br>
          <ul>
            <li>Total de Questões: <p class = 'text-bold'><?php echo intval($myArrayFuncionario[0]) ?></p></li>
            <li>Total de Pontos disponíveis por Área: <p class = 'text-bold'><?php echo intval($myArrayFuncionario[0] * 5) ?></p></li>
            <br>
            <li class='text-bold'>Área de Pré-Vendas:</li>
            <ul>
              <li>Total de Pontos: <p class = 'text-bold'><?php echo $myArrayFuncionario[1] ?></p></li>
              <li>Percentual das Respostas: <p class = 'text-bold'><?php echo number_format((($myArrayFuncionario[1] / ($myArrayFuncionario[0] * 5)) * 100), 2, ".", "") ?>%</p></li>
            </ul>
            <br>
            <li class='text-bold'>Área de Delivery:</li>
            <ul>
              <li>Total de Pontos: <p class = 'text-bold'><?php echo $myArrayFuncionario[2] ?></p></li>
              <li>Percentual das Respostas: <p class = 'text-bold'><?php echo number_format((($myArrayFuncionario[2] / ($myArrayFuncionario[0] * 5)) * 100), 2, ".", "") ?>%</p></li>
            </ul>
            <br>
            <li class='text-bold'>Área de Suporte:</li>
            <ul>
              <li>Total de Pontos: <p class = 'text-bold'><?php echo $myArrayFuncionario[3] ?></p></li>
              <li>Percentual das Respostas: <p class = 'text-bold'><?php echo number_format((($myArrayFuncionario[3] / ($myArrayFuncionario[0] * 5)) * 100), 2, ".", "") ?>%</p></li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br>
  <?php
    $Count1 = 0;
    $Count2 = 1;
    foreach ($result2 as $column) {
      if ( $Count1 <> intval($column['idQuestions']) ) {
        echo '<div class="panel panel-default">';
        echo '	<div class="panel-heading">' . $column['desQuestions'] . '</div>';
        echo '	<div class="panel-body">';
        echo '	 <div class="panel-espaco-interno">';
        echo '    <div class="row">';
        echo '      <div class="col-md-12 cabecalho-tabela">Resultado</div>';
        echo '    </div>';
        echo '    <div class="row">';
        echo '      <div class="col-md-4 cabecalho-individual">Pré-Vendas</div>';
        echo '      <div class="col-md-4 cabecalho-individual">Delivery</div>';
        echo '      <div class="col-md-4 cabecalho-individual">Suporte</div>';
        echo '    </div>';
        echo '    <div class="row">';
        if (intval($column['answerFuncionario']) < 3 ){
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-red">';
        } elseif (intval($column['answerFuncionario']) == 3 ) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-green">';
        } elseif (intval($column['answerFuncionario']) > 3) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-blue">';
        }
        echo $column['answerFuncionario'] . '</div>';
        $Count1 = intval($column['idQuestions']);
        $Count2++;
      } else {
        if (intval($column['answerFuncionario']) < 3 ){
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-red">';
        } elseif (intval($column['answerFuncionario']) == 3 ) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-green">';
        } elseif (intval($column['answerFuncionario']) > 3) {
          echo '<div class="col-md-4 cabecalho-tabela-funcionario text-blue">';
        }
        echo $column['answerFuncionario'] . '</div>';
        if ($Count2 == 2) {
          $Count2++;
        } elseif ($Count2 == 3) {
          echo '    </div>';
          echo '   </div>';
          echo '  </div>';
          echo '</div>';
          $Count2 = 1;
        }
      }
    }
    unset($result1, $result2, $total_result1, $total_result2, $column, $sql, $myAnswers_Pre, $myAnswers_Del, $myAnswers_Sup);
  ?>
  <br>
  <br>
  </div>
</section>
</body>
</html>
