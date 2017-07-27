
<?php
  $Count1 = 1;
  $Count2 = 1;
  $Count3 = 1;
  $Count4 = 2;
  $myAnswer = Array();
  $myUsers_Pre  = Array();
  $myUsers_Del  = Array();
  $myUsers_Sup  = Array();
  $sql = new Sql();
  for ($Count1 = 1; $Count1 <= 6 ; $Count1++) {
    $Count4 = 2;
    $result1 = $sql->select("
      SELECT
        actar.tb_vendors.nomeVendor
      FROM
        actar.tb_vendors
      WHERE ( actar.tb_vendors.idVendor = $Count1 );");
    $myAnswer[$Count1][0] = $result1[0][0];
    $result1 = $sql->select("
      SELECT
        COUNT( actar.tb_questions_vendors.idQuestions_vendors )
      FROM
        actar.tb_questions_vendors
      WHERE
        ( actar.tb_questions_vendors.idVendor = $Count1 );");
    $myAnswer[$Count1][1] = $result1[0][0];
    for ($Count2 = 1; $Count2 <= 3 ; $Count2++) {
      for ($Count3 = 1; $Count3 <= 5 ; $Count3++) {
        $result1 = $sql->select("
        SELECT
          COUNT( actar.tb_questions_answers.answerFuncionario )
        FROM ( actar.tb_questions_answers
          INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario )
        WHERE
              ( actar.tb_questions_answers.idVendor           = $Count1 )
          and ( actar.tb_questions_answers.idDepartamento     = $Count2 )
          and ( actar.tb_questions_answers.answerFuncionario  = $Count3 )
          and ( actar.tb_funcionarios.analiseFuncionario      = 1 );");
        $Count4++;
        $myAnswer[$Count1][$Count4] = $result1[0][0];
      }
    }
  }
  $result1 = $sql->select("
    SELECT
      *
    FROM
      actar.tb_funcionarios
    WHERE ( actar.tb_funcionarios.analiseFuncionario = 1 );");
    foreach ($result1 as $mResult) {
      //$myArrayTeste[0][$mResult['nomeFuncionario']] = rand(10,100);
      for ($Count1=1; $Count1 <= 6 ; $Count1++) {
        $Count4 = 0;
        for ($Count2=1; $Count2 <= 3 ; $Count2++) {
          for ($Count3=1; $Count3 <= 5 ; $Count3++) {
            $result2 = $sql->select('
            SELECT
              SUM( actar.tb_questions_answers.answerFuncionario ) AS Ranking
            FROM ( actar.tb_questions_answers
              INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario	= actar.tb_questions_answers.idFuncionario )
            WHERE
                  ( actar.tb_questions_answers.idVendor           = ' . $Count1 . ' )
              and ( actar.tb_questions_answers.idDepartamento     = ' . $Count2 . ' )
              and ( actar.tb_questions_answers.idFuncionario      = ' . intval($mResult['idFuncionario']) . ' )
              and ( actar.tb_questions_answers.answerFuncionario  = ' . $Count3 . ' )
              and ( actar.tb_funcionarios.analiseFuncionario      = 1 );');
              $Count4 = $Count4 + (intval($result2[0]['Ranking']));
          }
          if ($Count2 == 1){
            $myUsers_Pre[$Count1][$mResult['idFuncionario']] = $Count4;
          } elseif ($Count2 == 2) {
            $myUsers_Del[$Count1][$mResult['idFuncionario']] = $Count4;
          } elseif ($Count2 == 3) {
            $myUsers_Sup[$Count1][$mResult['idFuncionario']] = $Count4;
          }
          $Count4=0;
        }
      }
    }
?>
<section>
  <div id="corpo">
    <h1>Resumo da Análise para Fabricantes</h1>
    <br>
    <h5>
      Seguindo os relatórios individuais por fabricante, este relatório visa uma visão individual sobre como a Área de Tecnologia adota a tecnologia por cada Fabricante.
      <br>
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
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $Count2 = 1;
    for ($Count1 = 1; $Count1 <= 1; $Count1++){
      echo '<div class="panel panel-default panel-default-tipoB">';
      echo '	<div class="panel-heading"><strong>' . $myAnswer[$Count1][0] . '</strong></div>';
      echo '	<div class="panel-body panel-tipoB">';
      echo '    <p>As estatisticas abaixo do Fabricante <strong>' . $myAnswer[$Count1][0] .'</strong> foram geradas utilizando base nos valores abaixo:</p>';
      echo '    <ul>';
      echo '      <li>Quantidade de Perguntas: <strong>' . $myAnswer[$Count1][1] . ';</strong></li>';
      echo '      <li>Quantidade de Participantes: <strong>' . $total_funcionarios . ';</strong></li>';
      echo '    </ul>';
      echo '		<table class="tblGraph">';
      echo '			<tr>';
      echo '				<th>Pré-Vendas</th>';
      echo '				<th>Delivery</th>';
      echo '				<th>Suporte</th>';
      echo '			</tr>';
      echo '			<tr>';
      echo '				<td>
                      <div id="graphTipoB' . $Count2++ . '" class="col-sm-3" ChartValues="' .
                        number_format((($myAnswer[$Count1][ 3] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][ 4] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][ 5] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][ 6] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][ 7] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). '">
                      </div><br>';
      echo '          Ranking:<br>';
      echo '		      <table class="tblRanking">';
      echo '			     <tr>';
      echo '            <th>Funcionario</th>';
      echo '				    <th>Pontuação</th>';
      echo '			     </tr>';
      echo '			     <tr>';
      echo '				    <td></td>';
      echo '				    <td></td>';
      echo '          </table>';
      echo '        </td>';
      echo '				<td>
                      <div id="graphTipoB' . $Count2++ . '" ChartValues="' .
                        number_format((($myAnswer[$Count1][ 8] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][ 9] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][10] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][11] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][12] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). '">
                      </div>
                    </td>';
      echo '				<td>
                      <div id="graphTipoB' . $Count2++ . '" ChartValues="' .
                        number_format((($myAnswer[$Count1][13] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][14] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][15] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][16] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). ', ' .
                        number_format((($myAnswer[$Count1][17] / ($myAnswer[$Count1][1] * $total_funcionarios)) * 100 ), 2, ".", ""). '">
                      </div>
                    </td>';
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
<script src="../include/js/ChartB.js"></script>
