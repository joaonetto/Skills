
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
      1 - Não sabe falar sobre o produto e nem especificar; <br>
      2 - É capaz de falar sobre o produto em reuniões;<br>
      3 - É capaz de falar sobre o produto em reuniões e especificar tempos de configuração inicial;<br>
      4 - É capaz de falar sobre o produto em reuniões, fazer "BoM" da solução e especificar tempos de configuração inicial;<br>
      5 - É capaz de falar sobre o produto em apresentações e eventos, fazer "BoM" da solução e especificar tempos de configuração inicial.<br>
      <br>
      <br>
    </h5>
    <h3>
        Suporte
    </h3>
    <h5>
      1 - Não sabe falar sobre o produto e nem especificar; <br>
      2 - É capaz de falar sobre o produto em reuniões;<br>
      3 - É capaz de falar sobre o produto em reuniões e especificar tempos de configuração inicial;<br>
      4 - É capaz de falar sobre o produto em reuniões, fazer "BoM" da solução e especificar tempos de configuração inicial;<br>
      5 - É capaz de falar sobre o produto em apresentações e eventos, fazer "BoM" da solução e especificar tempos de configuração inicial.<br>
      Veja abaixo as perguntas direcionadas aos profissionais da Área de Tecnologia para o fabricante acima. As mesmas questões foram direcionadas para as áreas de: Pré-Vendas, Delivery e Suporte.
      <br>
      <br>
    </h5>
  </div>
  <?php
    $Count=1;
    $myAnswers_Pre = Array();
    $myAnswers_Del = Array();
    $myAnswers_Sup = Array();
    foreach ($result2 as $column) {
      //
      // Inclusao de Dados para a formação de gráficos para Pré-Vendas
      //
      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 1)
          and (actar.tb_questions_answers.answerFuncionario = 1)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Pre[0] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 1)
          and (actar.tb_questions_answers.answerFuncionario = 2)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Pre[1] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 1)
          and (actar.tb_questions_answers.answerFuncionario = 3)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Pre[2] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 1)
          and (actar.tb_questions_answers.answerFuncionario = 4)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Pre[3] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 1)
          and (actar.tb_questions_answers.answerFuncionario = 5)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Pre[4] = $result3[0][0];

      //
      // Inclusao de Dados para a formação de gráficos para Delivery
      //
      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 2)
          and (actar.tb_questions_answers.answerFuncionario = 1)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Del[0] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 2)
          and (actar.tb_questions_answers.answerFuncionario = 2)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Del[1] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 2)
          and (actar.tb_questions_answers.answerFuncionario = 3)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Del[2] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 2)
          and (actar.tb_questions_answers.answerFuncionario = 4)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Del[3] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 2)
          and (actar.tb_questions_answers.answerFuncionario = 5)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Del[4] = $result3[0][0];

      //
      // Inclusao de Dados para a formação de gráficos para Suporte
      //
      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 3)
          and (actar.tb_questions_answers.answerFuncionario = 1)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Sup[0] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 3)
          and (actar.tb_questions_answers.answerFuncionario = 2)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Sup[1] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 3)
          and (actar.tb_questions_answers.answerFuncionario = 3)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Sup[2] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 3)
          and (actar.tb_questions_answers.answerFuncionario = 4)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Sup[3] = $result3[0][0];

      $result3 = $sql->select('
        SELECT count(actar.tb_questions_answers.idFuncionario)
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario)
        WHERE
              (actar.tb_questions_answers.idQuestions = ' . $column['idQuestions'] .')
          and (actar.tb_questions_answers.idDepartamento = 3)
          and (actar.tb_questions_answers.answerFuncionario = 5)
          and (actar.tb_funcionarios.analiseFuncionario = 1);');
      $myAnswers_Sup[4] = $result3[0][0];

      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading"><strong>' . $column['desQuestions'] . '</strong></div>';
      echo '	<div class="panel-body">';
      echo '		<table class="tblGraph">';
      echo '			<tr>';
      echo '				<th>Pré-Vendas</th>';
      echo '				<th>Delivery</th>';
      echo '				<th>Suporte</th>';
      echo '			</tr>';
      echo '			<tr>';
      echo '				<td><div id="graphDiv' . $Count++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Pre) . '">
                        </div></td>';
      echo '				<td><div id="graphDiv' . $Count++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Del) . '">
                        </div></td>';
      echo '				<td><div id="graphDiv' . $Count++ . '" ChartValues="'
                          . implode(", ",$myAnswers_Sup) . '">
                        </div></td>';
      echo '			</tr>';
      echo '		</table>';
      echo '	</div>';
      echo '</div>';
    }
    unset($result1, $result2, $total_result1, $total_result2, $column, $sql);
  ?>
  <br>
  <br>
  </div>
</section>
</body>
</html>
<script src="../include/js/Chart2.js"></script>
