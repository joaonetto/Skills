<?php include_once("header.php");?>
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
    <div class="panel panel-default">
      <div class="panel-heading">Usuarios Contidos nesta Análise</div>
      <div class="panel-body">
        <div class="panel-espaco-interno">
          <div class="row">
            <div class="col-md-7 cabecalho-tabela">Nome</div>
            <div class="col-md-5 cabecalho-tabela">E-Mail</div>
          </div>
          <?php
            $tempFunc = 0;
            foreach ($GLOBALS['$qlb_Funcionarios'] as $column_Funcionario) {
              if ($column_Funcionario['analiseFuncionario'] == 1) {
                echo '<div class="row">';
                echo '  <div class="col-md-7 cabecalho-tabela-funcionario-individual">' . $column_Funcionario['nomeFuncionario'] . '</div>';
                echo '  <div class="col-md-5 cabecalho-tabela-funcionario-individual">'. $column_Funcionario['emailFuncionario'] . '</div>';
                echo '</div>';
              } elseif ($column_Funcionario['AnaliseFuncionario'] == 0) {
                $tempFunc++;
              }
            }
            ?>
        </div>
      </div>
    </div>
    <h5>
      <br>
        Os funcionários abaixo por outro lado foram retirados desta analise, por serem Diretores de outras áreas e/ou profissionais dedicados e alocados diretamente para um outro segmento interno, como é o caso do SGA.
      <br>
      <br>
        Apesar de alguns profissionais abaixo executarem funções para a Área de Tecnologia, não devem ser considerados 100% de seu tempo para tal, e desta maneira, apesar de conter Skills importantes para as áreas, é sadio retirá-los afim de não mascarar o perfil atual do Pool.
      <br>
      <br>
    </h5>
    <div class="panel panel-default">
      <div class="panel-heading">Usuarios Retirados nesta Análise</div>
      <div class="panel-body">
        <div class="panel-espaco-interno">
          <div class="row">
            <div class="col-md-7 cabecalho-tabela">Nome</div>
            <div class="col-md-5 cabecalho-tabela">E-Mail</div>
          </div>

          <?php
              if ($tempFunc <> 0 ) {
                foreach ($GLOBALS['$qlb_Funcionarios'] as $column_Funcionario) {
                  if ($column_Funcionario['analiseFuncionario'] == 0) {
                    echo '<div class="row">';
                    echo '  <div class="col-md-7 cabecalho-tabela-funcionario-individual">' . $column_Funcionario['nomeFuncionario'] . '</div>';
                    echo '  <div class="col-md-5 cabecalho-tabela-funcionario-individual">'. $column_Funcionario['emailFuncionario'] . '</div>';
                    echo '</div>';
                  }
                }
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
          </div>
        </div>
      </div>
      <br>
      <br>
	</div>
</section>
</body>
</html>
