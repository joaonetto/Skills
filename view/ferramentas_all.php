<?php
  $time_start = microtime(true);
  $Count1               = 1;
  $myAnswer_User        = Array();
  $myAnswer_Ferramenta  = Array();
  $myUsers              = Array();
  $sql = new Sql();
  foreach ($GLOBALS['$qlb_Ferramentas'] as $column_Ferramentas) {
    $result1 = $sql->select('
      SELECT
        actar.tb_funcionarios.idFuncionario,
        actar.tb_funcionarios.nomeFuncionario,
        actar.tb_questions_ferramentas_answers.answerFuncFerramenta
      FROM ( actar.tb_questions_ferramentas_answers
        INNER JOIN actar.tb_funcionarios	ON actar.tb_funcionarios.idFuncionario		= actar.tb_questions_ferramentas_answers.idFuncionario )
      WHERE
            ( actar.tb_questions_ferramentas_answers.idSurvey     = ' . $GLOBALS['$analiseSurvey'] . ' )
        AND ( actar.tb_questions_ferramentas_answers.idFerramenta = ' . $column_Ferramentas['idFerramenta'] . ' )
        AND ( actar.tb_funcionarios.analiseFuncionario            = 1 )
      ORDER BY
        actar.tb_funcionarios.idFuncionario,
        actar.tb_questions_ferramentas_answers.answerFuncFerramenta ASC;');
    foreach ($result1 as $column_Result1) {
      $myAnswer_User[$column_Ferramentas['idFerramenta']][$column_Result1['idFuncionario']] = $myAnswer_User[$column_Ferramentas['idFerramenta']][$column_Result1['idFuncionario']] + $column_Result1['answerFuncFerramenta'];
      $myUsers[$column_Result1['idFuncionario']] = $column_Result1['nomeFuncionario'];
      $myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']][$column_Result1['answerFuncFerramenta']] = ($myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']][$column_Result1['answerFuncFerramenta']]) + 1;
    }
    arsort($myAnswer_User[$column_Ferramentas['idFerramenta']]);
    foreach ($myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']] as $idArea => $valueArea) {
      $myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']][$idArea] =
        number_format((( $valueArea ) / ( $GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramentas_Total'] * $GLOBALS['$qlb_Funcionarios_Total'] ) * 100 ), 2, ".", "");
    }
    ksort($myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']]);
  }
?>
<section>
  <div id="corpo">
    <h1>Resumo da Análise por Ferramentas ACTAR</h1>
    <br>
    <h5>
      Seguindo os relatórios individuais por fabricante, este relatório visa uma visão individual sobre como a Área de Tecnologia adota a tecnologia por cada Fabricante.
      <br>
    </h5>
    <h3>
        Ferramentas ACTAR
    </h3>
    <h5>
      1 - Não tenho conhecimento de tal Ferramenta a ponto de poder opinar;<br>
      2 - Entendo seu funcionamento e consigo empregar tal Ferramenta em meu trabalho;<br>
      3 - O meu conhecimento permite ensinar outros a utilizarem desta Ferramenta;<br>
      4 - Conheço a ferramenta profundamente, o que me permite customizá-la e administrá-la;<br>
      5 - Tenho domínio sobre a Ferramenta e estou capacitado a gerar material didático e ministrar cursos sobre a ela.<br>
    </h5>
  </div>
  <br>
  <br>
  <?php
    $Count1 = 1;
    $valorMedio = 0;
    foreach ($GLOBALS['$qlb_Ferramentas'] as $column_Ferramentas) {
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading"><a href="ferramentas-' . $column_Ferramentas['idFerramenta'] . '">'. $column_Ferramentas['nomeFerramenta'] . '</a></div>';
      echo '	<div class="panel-body">';
      echo '    <p>As estatisticas abaixo da Tecnologia <strong>' . $column_Ferramentas['nomeFerramenta'] .'</strong> foram geradas utilizando base nos valores abaixo:</p>';
      echo '    <ul>';
      echo '      <li>Quantidade de Perguntas: <strong>' . $GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramenta_Total'] . ';</strong></li>';
      echo '      <li>Quantidade de Participantes: <strong>' . $GLOBALS['$qlb_Funcionarios_Total'] . ';</strong></li>';
      echo '      <br>';
      echo '      <li>Pontuação Máxima: <strong>' . ($GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramenta_Total'] * 5) . '</strong></li>';
      echo '    </ul>';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-tabela">Gráfico</div>';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-vazio"></div>';
      echo '      <div id="graphTipoB' . $Count1++ . '" class="graphTipoB" ChartValues="'
                          . implode(", ",$myAnswer_Ferramenta[$column_Ferramentas['idFerramenta']]) . '"></div>';
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
      foreach ($myAnswer_User[$column_Ferramentas['idFerramenta']] as $idFuncionario => $valueAnswer) {
        echo '    <div class="row">';
        echo '      <div class="col-md-4 cabecalho-vazio"></div>';
        echo '      <div class="col-md-2 cabecalho-ranking-result"><a href="ferramentasfunc-' . $column_Ferramentas['idFerramenta'] . $idFuncionario . '-(' . $GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramentas_Total'] . ',' . $valueAnswer . ',' . $myUsers[$idFuncionario] . ',' . $column_Ferramentas['nomeFerramenta'] . ')">' . $myUsers[$idFuncionario] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . $valueAnswer . '</div>';
        echo '      <div class="col-md-1 cabecalho-ranking-result">' . number_format((( $valueAnswer / ($GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramentas_Total'] * 5)) * 100), 2, ".", "") . '</div>';
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
      echo '      <div class="col-md-4 cabecalho-tabela-funcionario text-blue">' . number_format(($valorMedio / (($GLOBALS['$qlb_Questions_Ferramentas_Total'][$column_Ferramentas['idFerramenta'] - 1]['Ferramentas_Total'] * 5) * $GLOBALS['$qlb_Funcionarios_Total']) * 100), 2, ".", "") . '%</div>';
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
      $myAnswer_Ferramenta,
      $myUsers,
      $column_Ferramentas,
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
