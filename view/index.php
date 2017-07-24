<?php include_once("header.php");?>
<?php
  $sql = new Sql();
  $data = $sql->select("SELECT * FROM actar.tb_funcionarios order by nomeFuncionario asc;");
  //var_dump($data);
?>
<section>
	<div id="corpo">
    <h1>Estudo de Análise de Skills</h1>
    <br>
    <h5>
      Neste primeiro estudo de Skills, a <strong>Área de Tecnologia</strong> levou em consideração para análise itens como:
      <br>
      <br>
      <ul>
        <li>Fabricantes;</li>
        <li>Tecnologias;</li>
        <li>Áreas de Interesse;</li>
        <li>Ranking dos profissionais.</li>
      </ul>
      <br>
      <br>
      A lista abaixo demonstra quais profissionais estão contidos neste estudo, veja:
    </h5>
    <br>
    <table style="width:60%">
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
      </tr>
      <?php
        foreach ($data as $column) {
          echo '<tr>';
          echo '<td>' . $column['nomeFuncionario'];
          echo '<td><a href=mailto:' . $column['emailFuncionario'] . '>'. $column['emailFuncionario'] . '</a></td>';
          echo '</tr>';
        }
        unset($data, $column, $sql);
      ?>
    </table>
	</div>
</section>
</body>
</html>
