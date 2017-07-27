<?php
  $sql = new Sql();
  $result1 = $sql->select("select actar.tb_vendors.nomeVendor from actar.tb_vendors where actar.tb_vendors.idVendor = $id_func;");
  $result1 = $result1[0][0];
  $result2 = $sql->select("
    SELECT
      actar.tb_questions.idQuestions, actar.tb_questions.desQuestions
    FROM ((( actar.tb_questions_vendors
      inner join actar.tb_survey        on actar.tb_survey.idSurvey               = actar.tb_questions_vendors.idSurvey)
      inner join actar.tb_questions     on actar.tb_questions.idQuestions         = actar.tb_questions_vendors.idQuestions)
      inner join actar.tb_vendors       on actar.tb_vendors.idVendor              = actar.tb_questions_vendors.idVendor)
    WHERE actar.tb_vendors.idVendor = $id_func
    ORDER BY actar.tb_questions.idQuestions asc;");
?>
<section>
  <div id="corpo">
    <h1>Questões Destinadas ao fabricante: <?php echo $result1 ?></h1>
    <br>
    <h5>
      Para cada área de interesse da pesquisa, foi informado aos participantes que pontuassem seguindo a regra abaixo, veja:
    </h5>
    <h3>
        Pré-Vendas
    </h3>
    <h5>
      1 - Não sabe falar sobre o produto e nem especificar;<br>
      2 - É capaz de falar sobre o produto em reuniões;<br>
      3 - É capaz de falar sobre o produto em reuniões e especificar tempos de configuração inicial;<br>
      4 - É capaz de falar sobre o produto em reuniões, fazer "BoM" da solução e especificar tempos de configuração inicial;<br>
      5 - É capaz de falar sobre o produto em apresentações e eventos, fazer "BoM" da solução e especificar tempos de configuração inicial.<br>
    </h5>
    <h3>
        Delivery
    </h3>
    <h5>
      1 - Nunca fez parte de uma instalação física / configuração lógica;<br>
      2 - Conhece teoricamente como deve ser a instalação física / configuração lógica;<br>
      3 - Participou de algumas instalações físicas / configurações lógicas deste produto;<br>
      4 - Tem conhecimento e vivência suficiente para executar uma instalação física / configuração lógica;<br>
      5 - Pode ser visto como um Líder de Projeto.<br>
    </h5>
    <h3>
        Suporte
    </h3>
    <h5>
      1 - Não esta apto a participar do suporte;<br>
      2 - Conhece suficiente para resolução de problemas básicos;<br>
      3 - Tem capacidade de resolução de problemas de média complexidade e encaminhar solicitações para o fabricante;<br>
      4 - Tem conhecimento e vivência suficiente para solucionar a maioria dos chamados;<br>
      5 - Tem grande conhecimento e total capacidade de resolução de problemas complexos.<br>
      <br>
      <br>
      Veja abaixo a pontuação das questões dadas pelos funcionário participante.<br><br>
      Nesta análise por questões individuais, podemos claramente defender a melhoria por um produto e não levando em consideração o todo do Fabricante e/ou o posicionamento da questão perante a tecnologia.<br>
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $Count2 = 1;
    $myAnswers_Pre = Array();
    $myAnswers_Del = Array();
    $myAnswers_Sup = Array();
    foreach ($result2 as $column) {
      //
      // Inclusao de Dados para a formação de gráficos para Pré-Vendas
      //
      for ($Count2 = 1; $Count2 <= 5; $Count2++){
        $result3 = $sql->select('
          SELECT count(actar.tb_questions_answers.idFuncionario)
          FROM ( actar.tb_questions_answers
            INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
          WHERE
                (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
            and (actar.tb_questions_answers.idDepartamento = 1)
            and (actar.tb_questions_answers.answerFuncionario = ' . $Count2 . ')
            and (actar.tb_funcionarios.analiseFuncionario = 1);');
        $myAnswers_Pre[$Count2] = $result3[0][0];
      }

      //
      // Inclusao de Dados para a formação de gráficos para Delivery
      //
      for ($Count2 = 1; $Count2 <= 5; $Count2++){
        $result3 = $sql->select('
          SELECT count(actar.tb_questions_answers.idFuncionario)
          FROM ( actar.tb_questions_answers
            INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
          WHERE
                (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
            and (actar.tb_questions_answers.idDepartamento = 2)
            and (actar.tb_questions_answers.answerFuncionario = ' . $Count2 . ')
            and (actar.tb_funcionarios.analiseFuncionario = 1);');
        $myAnswers_Del[$Count2] = $result3[0][0];
      }

      //
      // Inclusao de Dados para a formação de gráficos para Suporte
      //
      for ($Count2 = 1; $Count2 <= 5; $Count2++){
        $result3 = $sql->select('
          SELECT count(actar.tb_questions_answers.idFuncionario)
          FROM ( actar.tb_questions_answers
            INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
          WHERE
                (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
            and (actar.tb_questions_answers.idDepartamento = 3)
            and (actar.tb_questions_answers.answerFuncionario = ' . $Count2 . ')
            and (actar.tb_funcionarios.analiseFuncionario = 1);');
        $myAnswers_Sup[$Count2] = $result3[0][0];
      }

      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading"><strong>' . $column['desQuestions'] . '</strong></div>';
      echo '	<div class="panel-body">';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-12 cabecalho-tabela">Grafico</div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-individual">Pré-Vendas</div>';
      echo '      <div class="col-md-4 cabecalho-individual">Delivery</div>';
      echo '      <div class="col-md-4 cabecalho-individual">Suporte</div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div id="graphTipoA' . $Count1++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Pre) . '"></div>';
      echo '      <div id="graphTipoA' . $Count1++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Del) . '"></div>';
      echo '      <div id="graphTipoA' . $Count1++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Sup) . '"></div>';
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
