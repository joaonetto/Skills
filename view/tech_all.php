<?php
  $Count1 = 1;
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
    arsort($myAnswer_User[$column_TechArea['idTech_Area']]);
    foreach ($myAnswer_TechArea[$column_TechArea['idTech_Area']] as $idArea => $valueArea) {
      $myAnswer_TechArea[$column_TechArea['idTech_Area']][$idArea] =
        number_format((( $valueArea ) / ( $GLOBALS['$qlb_Questions_TechArea_Total'][$column_TechArea['idTech_Area'] - 1]['TechArea_Total'] * $GLOBALS['$qlb_Funcionarios_Total'] ) * 100 ), 2, ".", "");
    }
    ksort($myAnswer_TechArea[$column_TechArea['idTech_Area']]);
  }
  //var_dump($myAnswer_User[3]);
  //exit;
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
    foreach ($GLOBALS['$qlb_TechArea'] as $column_TechArea) {
      echo '<div class="panel panel-default">';
      echo '	<div class="panel-heading">' . $column_TechArea['nomeTech_Area'] . '</div>';
      echo '	<div class="panel-body">';
      echo '    <p>As estatisticas abaixo da Tecnologia <strong>' . $column_TechArea['nomeTech_Area'] .'</strong> foram geradas utilizando base nos valores abaixo:</p>';
      echo '    <ul>';
      echo '      <li>Quantidade de Perguntas: <strong>' . $GLOBALS['$qlb_Questions_TechArea_Total'][$column_TechArea['idTech_Area'] - 1]['TechArea_Total'] . ';</strong></li>';
      echo '      <li>Quantidade de Participantes: <strong>' . $GLOBALS['$qlb_Funcionarios_Total'] . ';</strong></li>';
      echo '      <br>';
      echo '      <li>Pontuação Máxima: <strong>' . ($GLOBALS['$qlb_Questions_TechArea_Total'][$column_TechArea['idTech_Area'] - 1]['TechArea_Total'] * 5) . '</strong></li>';
      echo '    </ul>';
      echo '	 <div class="panel-espaco-interno">';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-titulo">Gráfico</div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '    </div>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '      <div id="graphTipoB' . $Count1++ . '" ChartValues="'
                          . implode(", ",$myAnswer_TechArea[$column_TechArea['idTech_Area']]) . '"></div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '    </div>';
      echo '    <br>';
      echo '    <div class="row">';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-titulo">Ranking</div>';
      echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
      echo '    </div>';
      foreach ($myAnswer_User[$column_TechArea['idTech_Area']] as $idFuncionario => $valueAnswer) {
        echo '    <div class="row">';
        echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
        echo '      <div class="col-md-2 cabecalho-techquestion-individual"><a href="techfunc-' . $column_TechArea['idTech_Area'] . $idFuncionario . '">' . $myUsers[$idFuncionario] . '</a></div>';
        echo '      <div class="col-md-1 cabecalho-techquestion-individual">' . $valueAnswer . '</div>';
        echo '      <div class="col-md-1 cabecalho-techquestion-individual">' . number_format((( $valueAnswer / ($GLOBALS['$qlb_Questions_TechArea_Total'][$column_TechArea['idTech_Area'] - 1]['TechArea_Total'] * 5)) * 100), 2, ".", "") . '</div>';
        echo '      <div class="col-md-4 cabecalho-techquestion-vazio"></div>';
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
