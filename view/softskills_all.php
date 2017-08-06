<?php
  $time_start = microtime(true);
  $Count1             = 1;
  $myAnswer_User        = Array();
  $myAnswer_SoftSkills  = Array();
  $myUsers              = Array();
  $sql = new Sql();
  foreach ($GLOBALS['$qlb_SoftSkills'] as $column_SoftSkills) {
    $result1 = $sql->select('
      SELECT
        actar.tb_funcionarios.idFuncionario,
        actar.tb_funcionarios.nomeFuncionario,
        actar.tb_questions_softskills_answers.answerFuncSoftSkills
      FROM ( actar.tb_questions_softskills_answers
        INNER JOIN actar.tb_funcionarios	ON actar.tb_funcionarios.idFuncionario = actar.tb_questions_softskills_answers.idFuncionario )
      WHERE
            ( actar.tb_questions_softskills_answers.idSurvey     = ' . $GLOBALS['$analiseSurvey'] . ' )
        AND ( actar.tb_questions_softskills_answers.idSoftSkills = ' . $column_SoftSkills['idSoftSkills'] . ' )
        AND ( actar.tb_funcionarios.analiseFuncionario           = 1 )
      ORDER BY
        actar.tb_funcionarios.idFuncionario,
        actar.tb_questions_softskills_answers.answerFuncSoftSkills ASC;');
    foreach ($result1 as $column_Result1) {
      $myAnswer_User[$column_SoftSkills['idSoftSkills']][$column_Result1['idFuncionario']] = $myAnswer_User[$column_SoftSkills['idSoftSkills']][$column_Result1['idFuncionario']] + $column_Result1['answerFuncSoftSkills'];
      $myUsers[$column_Result1['idFuncionario']] = $column_Result1['nomeFuncionario'];
      $myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']][$column_Result1['answerFuncSoftSkills']] = ($myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']][$column_Result1['answerFuncSoftSkills']]) + 1;
    }
    arsort($myAnswer_User[$column_SoftSkills['idSoftSkills']]);
    foreach ($myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']] as $idArea => $valueArea) {
      $myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']][$idArea] =
        number_format((( $valueArea ) / ( $GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] * $GLOBALS['$qlb_Funcionarios_Total'] ) * 100 ), 2, ".", "");
    }
    ksort($myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']]);
  }
?>
<section>
  <div id="corpo">
    <h1>Resumo da Análise por SoftSkills ACTAR</h1>
    <br>
    <h5>
      Seguindo os relatórios individuais por fabricante, este relatório visa uma visão individual sobre como a Área de Tecnologia adota a tecnologia por cada Fabricante.
      <br>
    </h5>
    <h3>
        Soft Skills ACTAR
    </h3>
    <h5>
      1 - Não. Sem as devidas qualificações<br>
      2 - Sim. Qualificações Parciais;<br>
      3 - Sim. Tem completamente as Qualificações;<br>
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $valorMedio = 0;
    foreach ($GLOBALS['$qlb_SoftSkills'] as $column_SoftSkills) {
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading"><a href="softskills-' . $column_SoftSkills['idSoftSkills'] . '">'. $column_SoftSkills['nomeSoftSkills'] . '</a></div>';
      echo '	<div class="panel-body">';
      echo '    <p>As estatisticas abaixo da Tecnologia <strong>' . $column_SoftSkills['nomeSoftSkills'] .'</strong> foram geradas utilizando base nos valores abaixo:</p>';
      echo '    <ul>';
      echo '      <li>Quantidade de Perguntas: <strong>' . $GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] . '.</strong></li>';
      echo '      <li>Quantidade de Participantes: <strong>' . $GLOBALS['$qlb_Funcionarios_Total'] . '.</strong></li>';
      echo '      <br>';
      echo '      <li>Pontuação Máxima: <strong>' . ($GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] * 3) . '</strong></li>';
      echo '    </ul>';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Gráfico</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div id="graphTipoD' . $Count1++ . '" class="graphTipoD" ChartValues="'
                          . implode(", ",$myAnswer_SoftSkills[$column_SoftSkills['idSoftSkills']]) . '"></div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <br>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Ranking</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-2 cabecalho-individual">Funcionário</div>';
      echo '      <div class="col-md-1 cabecalho-individual">Posição</div>';
      echo '      <div class="col-md-1 cabecalho-individual">%</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      foreach ($myAnswer_User[$column_SoftSkills['idSoftSkills']] as $idFuncionario => $valueAnswer) {
        echo '    <div class="row">';
        echo '      <div class="col-md-4 cabecalho-vazio"></div>';
        echo '      <div class="col-md-2 cabecalho-ranking-result"><a href="softskillsfunc-' . $column_SoftSkills['idSoftSkills'] . $idFuncionario . '-(' . $GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] . ',' . $valueAnswer . ',' . $myUsers[$idFuncionario] . ',' . $column_SoftSkills['nomeSoftSkills'] . ')">' . $myUsers[$idFuncionario] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . $valueAnswer . '</div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . number_format((( $valueAnswer / ($GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] * 3)) * 100), 2, ".", "") . '</div>';
        echo '      <div class="col-md-4 cabecalho-vazio"></div>';
        echo '    </div>';
        $valorMedio = $valorMedio + $valueAnswer;
      }
      echo '    <br>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Valor Médio</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela-funcionario text-blue">' . number_format(($valorMedio / (($GLOBALS['$qlb_Questions_SoftSkills_Total'][$column_SoftSkills['idSoftSkills'] - 1]['SoftSkills_Total'] * 3) * $GLOBALS['$qlb_Funcionarios_Total']) * 100), 2, ".", "") . '%</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <br>';
      echo '   </div>';
      echo '  </div>';
      echo '</div>';
      $valorMedio = 0;
    }
    unset(
      $result1,
      $myAnswer_User,
      $myAnswer_SoftSkills,
      $myUsers,
      $column_SoftSkills,
      $sql,
      $Count1,
      $valorMedio
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
