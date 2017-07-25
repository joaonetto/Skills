<?php include_once("header.php");?>
<?php
  $sql = new Sql();
  $result1 = $sql->select("select actar.tb_vendors.nomeVendor from actar.tb_vendors where actar.tb_vendors.idVendor = $id_func;");
	$result1 = $result1[0][0];
  $result2 = $sql->select("
		SELECT
  		actar.tb_questions.desQuestions
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
      Veja abaixo as perguntas direcionadas aos profissionais da Área de Tecnologia para o fabricante acima. As mesmas questões foram direcionadas para as áreas de: Pré-Vendas, Delivery e Suporte.
      <br>
      <br>
		</h5>
    <table>
      <tr>
        <th><strong>Questões</strong></th>
      </tr>
      <?php
				foreach ($result2 as $column) {
          echo '<tr>';
          echo '<td>' . $column['desQuestions'];
          echo '</tr>';
        }
        unset($result1, $result2, $total_result1, $total_result2, $column, $sql);
      ?>
		</table>
		<br>
		<br>
	</div>
</section>
</body>
</html>
