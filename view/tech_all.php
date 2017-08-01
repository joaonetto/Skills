
<?php
  $Count1 = 1;
  $Count2 = 1;
  $Count3 = 1;
  $Count4 = 2;
  $myAnswer_User = Array();
  $myAnswer_Range= Array();
  $myUsers  = Array();
  $sql = new Sql();
  foreach ($GLOBALS['$qlb_TechArea'] as $column_TechArea) {
    $result1 = $sql->select('
    SELECT
      actar.tb_funcionarios.idFuncionario, actar.tb_funcionarios.nomeFuncionario, actar.tb_questions_tech_area_answers.answerFuncTechArea
    FROM ( actar.tb_questions_tech_area_answers
      INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario		= actar.tb_questions_tech_area_answers.idFuncionario )
    WHERE
          ( actar.tb_questions_tech_area_answers.idSurvey = ' . $GLOBALS['$analiseSurvey'] . ' )
      and ( actar.tb_questions_tech_area_answers.idTech_Area = ' . $column_TechArea['idTech_Area'] . ' )
      and ( actar.tb_funcionarios.analiseFuncionario = 1 )
    ORDER BY
      actar.tb_funcionarios.idFuncionario,
      actar.tb_questions_tech_area_answers.answerFuncTechArea asc;');
      foreach ($result1 as $column_Result1) {
        $myAnswer_User[$column_TechArea['idTech_Area']][$column_Result1['idFuncionario']] = $myAnswer_User[$column_TechArea['idTech_Area']][$column_Result1['idFuncionario']] + $column_Result1['answerFuncTechArea'];
        $myUsers[$column_Result1['idFuncionario']] = $column_Result1['nomeFuncionario'];
        $myAnswer_TechArea[$column_TechArea['idTech_Area']][$column_Result1['answerFuncTechArea']] = ($myAnswer_TechArea[$column_TechArea['idTech_Area']][$column_Result1['answerFuncTechArea']]) + 1;
      }
      ksort($myAnswer_TechArea[$column_TechArea['idTech_Area']]);
      arsort($myAnswer_User[$column_TechArea['idTech_Area']]);
  }
  var_dump($myAnswer_TechArea);
  exit;
?>
<section>
  <div id="corpo">
    <h1>Resumo da Análise por Tecnologia</h1>
    <br>
    <h5>
      Seguindo os relatórios individuais por fabricante, este relatório visa uma visão individual sobre como a Área de Tecnologia adota a tecnologia por cada Fabricante.
      <br>
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
    $Count3 = 1;
    for ($Count1 = 1; $Count1 <= 6; $Count1++){
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading">' . $myAnswer[$Count1][0] . '</div>';
      echo '	<div class="panel-body">';
      echo '    <p>As estatisticas abaixo do Fabricante <strong>' . $myAnswer[$Count1][0] .'</strong> foram geradas utilizando base nos valores abaixo:</p>';
      echo '    <ul>';
      echo '      <li>Quantidade de Perguntas: <strong>' . $myAnswer[$Count1][1] . ';</strong></li>';
      echo '      <li>Quantidade de Participantes: <strong>' . $GLOBALS['$qlb_Funcionarios_Total'] . ';</strong></li>';
      echo '      <br>';
      echo '      <li>Pontuação Máxima: <strong>' . (intval($myAnswer[$Count1][1])* 5) . '</strong></li>';
      echo '    </ul>';
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
      echo '      <div id="graphTipoB' . $Count2++ . '" ChartValues="' .
                    number_format((($myAnswer[$Count1][ 3] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][ 4] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][ 5] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][ 6] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][ 7] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). '"></div>';
      echo '      <div id="graphTipoB' . $Count2++ . '" ChartValues="' .
                    number_format((($myAnswer[$Count1][ 8] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][ 9] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][10] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][11] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][12] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). '"></div>';
      echo '      <div id="graphTipoB' . $Count2++ . '" ChartValues="' .
                    number_format((($myAnswer[$Count1][13] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][14] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][15] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][16] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). ', ' .
                    number_format((($myAnswer[$Count1][17] / ($myAnswer[$Count1][1] * $GLOBALS['$qlb_Funcionarios_Total'])) * 100 ), 2, ".", ""). '"></div>';
      echo '    </div>';
      echo '    <br>';
      echo '    <div class="row">';
      echo '      <div class="col-md-12 cabecalho-tabela">Ranking</div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-2 cabecalho-ranking">Funcionario</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">Posicao</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">%</div>';
      echo '      <div class="col-md-2 cabecalho-ranking">Funcionario</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">Posicao</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">%</div>';
      echo '      <div class="col-md-2 cabecalho-ranking">Funcionario</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">Posicao</div>';
      echo '      <div class="col-md-1 cabecalho-ranking">%</div>';
      echo '    </div>';
      for ($Count3 = 1; $Count3 <= count($myUsers_Pre_New[$Count1]) ; $Count3++) {
        echo '    <div class="row">';
        echo '      <div class="col-md-2 cabecalho-ranking-result"><a href="funcionarios-' . $Count1 . $myUsers_Pre_New[$Count1][$Count3][0] . '">' . $myUsers_Pre_New[$Count1][$Count3][1] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . $myUsers_Pre_New[$Count1][$Count3][2] . '</div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . number_format(((intval($myUsers_Pre_New[$Count1][$Count3][2]) / (intval($myAnswer[$Count1][1]) * 5)) * 100), 2, ".", "") . '</div>';
        echo '      <div class="col-md-2 cabecalho-ranking-result"><a href="funcionarios-' . $Count1 . $myUsers_Del_New[$Count1][$Count3][0] . '">' . $myUsers_Del_New[$Count1][$Count3][1] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . $myUsers_Del_New[$Count1][$Count3][2] . '</div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . number_format(((intval($myUsers_Del_New[$Count1][$Count3][2]) / (intval($myAnswer[$Count1][1]) * 5)) * 100), 2, ".", "") . '</div>';
        echo '      <div class="col-md-2 cabecalho-ranking-result"><a href="funcionarios-' . $Count1 . $myUsers_Sup_New[$Count1][$Count3][0] . '">' . $myUsers_Sup_New[$Count1][$Count3][1] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . $myUsers_Sup_New[$Count1][$Count3][2] . '</div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . number_format(((intval($myUsers_Sup_New[$Count1][$Count3][2]) / (intval($myAnswer[$Count1][1]) * 5)) * 100), 2, ".", "") . '</div>';
        echo '    </div>';
      }
      echo '   </div>';
      echo '  </div>';
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
