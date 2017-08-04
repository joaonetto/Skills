<?php include_once("header.php");?>
<?php
  $sql = new Sql();
  $result1 = $sql->select("SELECT * FROM actar.tb_funcionarios where analiseFuncionario = 0 order by nomeFuncionario asc;");
  $total_result1 = $sql->select("SELECT count(*) FROM actar.tb_funcionarios where analiseFuncionario = 0;");
  $total_result1 = intval($total_result1[0][0]);
  $result2 = $sql->select("SELECT * FROM actar.tb_funcionarios where analiseFuncionario = 1 order by nomeFuncionario asc;");
  $total_result2 = $sql->select("SELECT count(nomeFuncionario) FROM actar.tb_funcionarios where analiseFuncionario = 1;");
  $total_result2 = intval($total_result2[0][0]);
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
      A lista abaixo contém <strong><?php echo $total_result2 ?></strong> profissionais analisados neste momento. Estes profissionais pertencem ao Pool da Área de Tecnologia e atuam sobre funções diversas, como é o caso de: Pré-Vendas, Delivery e Suporte. Veja a lista abaixo:
    </h5>
    <br>
    <table>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
      </tr>
      <?php
        foreach ($result2 as $column) {
          echo '<tr>';
          echo '<td>' . $column['nomeFuncionario'] . '</td>';
          echo '<td><a href=mailto:' . $column['emailFuncionario'] . '>'. $column['emailFuncionario'] . '</a></td>';
          echo '</tr>';
        }
        echo '</table>';
        echo '<br>';
        if ($total_result1 <> 0 ) {
          echo '<h5><br><br>';
          echo 'Os funcionários abaixo por outro lado foram retirados desta analise, por serem Diretores de outras áreas e/ou profissionais dedicados e alocados diretamente para um outro segmento interno, como é o caso do SGA.<br><br>';
          echo 'Apesar de alguns profissionais abaixo executarem funções para a Área de Tecnologia, não devem ser considerados 100% de seu tempo para tal, e desta maneira, apesar de conter Skills importantes para as áreas, é sadio retirá-los afim de não mascarar o perfil atual do Pool.<br><br>';
          echo 'Os profissionais retirados são:<br><br></h5>';
          echo '<table><tr><th>Nome</th><th>E-mail</th></tr>';
          foreach ($result1 as $column) {
            echo '<tr>';
            echo '<td>' . $column['nomeFuncionario'];
            echo '<td><a href=mailto:' . $column['emailFuncionario'] . '>'. $column['emailFuncionario'] . '</a></td>';
            echo '</tr>';
          }
          echo '</table>';
        }
        unset(
          $sql,
          $result1,
          $result2,
          $total_result1,
          $total_result2,
          $column
        );
      ?>
      <br>
      <br>
	</div>
</section>
</body>
</html>
