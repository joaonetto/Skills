<?php

require 'include/configuration.php';
require 'include/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);

$app->get('/funcionarios-:id_func', function($id_func){

    $sql = new Sql();

    if (intval($id_func) == 0) {
      $data = $sql->select("SELECT * FROM actar.tb_funcionarios order by nomeFuncionario asc;");
    } else {
      $data = $sql->select("SELECT * FROM actar.tb_funcionarios where idFuncionario = $id_func;");
    }

    if (!empty($data)) {
      echo json_encode($data);
    }
});

$app->get('/questions', function(){

    $sql = new Sql();
    $b = array();
    $data = $sql->select("SELECT * FROM actar.vw_questions_vendors;");

    /*foreach ($data as &$vendors) {
      $teste = $vendors['nomeVendor'];
      array_push($b, array(
        'idVendor' => $vendors['idVendor'],
        'nomeVendor' => $vendors['nomeVendor']
      ));
    }
    */


    if (!empty($data)) {
      echo json_encode($data);
    }
    /*
    if (!empty($b)) {
      echo json_encode($b);
    }
    */
});

$app->get('/questions2', function(){

    $sql = new Sql();
    $b = array();
    $data = $sql->select("SELECT * FROM actar.vw_questions_vendors;");


    if (!empty($data)) {
      echo json_encode(convertToHierarchy($data));
    }
});


$app->get(
    '/videos',
    function () {

        require_once("view/videos.php");

    }
);

$app->get(
    '/shop',
    function () {

        require_once("view/shop.php");

    }
);

$app->get('/produtos', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos where preco_promorcional > 0 order by preco_promorcional desc limit 3;");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);

});

$app->get('/produtos-mais-buscados', function(){

    $sql = new Sql();

    $data = $sql->select("
        SELECT
        tb_produtos.id_prod,
        tb_produtos.nome_prod_curto,
        tb_produtos.nome_prod_longo,
        tb_produtos.codigo_interno,
        tb_produtos.id_cat,
        tb_produtos.preco,
        tb_produtos.peso,
        tb_produtos.largura_centimetro,
        tb_produtos.altura_centimetro,
        tb_produtos.quantidade_estoque,
        tb_produtos.preco_promorcional,
        tb_produtos.foto_principal,
        tb_produtos.visivel,
        cast(avg(review) as dec(10,2)) as media,
        count(id_prod) as total_reviews
        FROM tb_produtos
        INNER JOIN tb_reviews USING(id_prod)
        GROUP BY
        tb_produtos.id_prod,
        tb_produtos.nome_prod_curto,
        tb_produtos.nome_prod_longo,
        tb_produtos.codigo_interno,
        tb_produtos.id_cat,
        tb_produtos.preco,
        tb_produtos.peso,
        tb_produtos.largura_centimetro,
        tb_produtos.altura_centimetro,
        tb_produtos.quantidade_estoque,
        tb_produtos.preco_promorcional,
        tb_produtos.foto_principal,
        tb_produtos.visivel
        LIMIT 4;
    ");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);

});

$app->get("/produto-:id_prod", function($id_prod){

    $sql = new Sql();

    $produtos = $sql->select("SELECT * FROM tb_produtos WHERE id_prod = $id_prod");

    $produto = $produtos[0];

    $preco = $produto['preco'];
    $centavos = explode(".", $preco);
    $produto['preco'] = number_format($preco, 0, ",", ".");
    $produto['centavos'] = end($centavos);
    $produto['parcelas'] = 10;
    $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
    $produto['total'] = number_format($preco, 2, ",", ".");

    require_once("view/shop-produto.php");

});

$app->get(
    '/cart',
    function () {

        require_once("view/cart.php");

    }
);

$app->get('/carrinho-dados', function(){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $carrinho['produtos'] = $sql->select("CALL sp_carrinhosprodutos_list(".$carrinho['id_car'].")");

    $carrinho['total_car'] = number_format((float)$carrinho['total_car'], 2, ',', '.');
    $carrinho['subtotal_car'] = number_format((float)$carrinho['subtotal_car'], 2, ',', '.');
    $carrinho['frete_car'] = number_format((float)$carrinho['frete_car'], 2, ',', '.');

    echo json_encode($carrinho);

});

$app->get('/carrinhoAdd-:id_prod', function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].", ".$id_prod.")");

    header("location: cart");
    exit;

});

$app->delete("/carrinhoRemoveAll-:id_prod", function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutostodos_rem(".$carrinho['id_car'].", ".$id_prod.")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->post("/carrinho-produto", function(){

    $data = json_decode(file_get_contents("php://input"), true);

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].", ".$data['id_prod'].")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->delete("/carrinho-produto", function(){

    $data = json_decode(file_get_contents("php://input"), true);

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_rem(".$carrinho['id_car'].", ".$data['id_prod'].")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->get("/calcular-frete-:cep", function($cep){

    require_once("inc/php-calculo-frete-master/frete.php");

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $produtos = $sql->select("CALL sp_carrinhosprodutosfrete_list(".$carrinho['id_car'].")");

    $peso = 0;
    $comprimento = 0;
    $altura = 0;
    $largura = 0;
    $valor = 0;

    foreach ($produtos as $produto) {
        $peso =+ $produto['peso'];
        $comprimento =+ $produto['comprimento'];
        $altura =+ $produto['altura'];
        $largura =+ $produto['largura'];
        $valor =+ $produto['preco'];
    }

    $cep = trim(str_replace('-', '', $cep));

    $frete = new Frete(
        $cepDeOrigem = '01418100',
        $cepDeDestino = $cep,
        $peso,
        $comprimento,
        $altura,
        $largura,
        $valor
    );

    $sql = new Sql();

    $sql->query("
        UPDATE tb_carrinhos
        SET
            cep_car = '".$cep."',
            frete_car = ".$frete->getValor().",
            prazo_car = ".$frete->getPrazoEntrega()."
        WHERE id_car = ".$carrinho['id_car']
    );

    echo json_encode(array(
      'sucess'=>true
        /*'valor_frete'=>$frete->getValor(),
        'prazo'=>$frete->getPrazoEntrega()*/
    ));

});

function convertToHierarchy($results, $idField='idVendor', $parentIdField='idVendor', $childrenField='Questions') {
	$hierarchy = array(); // -- Stores the final data
	$itemReferences = array(); // -- temporary array, storing references to all items in a single-dimention
  $a = 0;
  $teste = $results[0][1];




	foreach ( $results as $item ) {
    $id = $item[$idField];
    //$hierarchy[$teste] = $item[$idField];
    if ($teste == $id) {
      //$itemReferences[$id][$childrenField][$id] = $item['idQuestions_vendors'];
      //$itemReferences[$id][$childrenField][$id] = $item['desQuestions'];
      //var_dump($itemReferences);
      $itemReferences[$id][$childrenField][$a][0] = $item['idQuestions_vendors'];
      $itemReferences[$id][$childrenField][$a][1] = $item['desQuestions'];
      $a++;
      //var_dump($a);
      //$itemReferences[$id] =& $hierarchy[$id];
    } else {
      $teste = $item[$idField];
      $itemReferences[$id][$childrenField][$a][0] = $item['idQuestions_vendors'];
      $itemReferences[$id][$childrenField][$a][1] = $item['desQuestions'];
      $a=0;
    }



    //$hierarchy[$id][1] = $item['nomeVendor'];
    //$a++;
		/*$id_vendor= $item['nomeVendor'];

		if (isset($itemReferences[$parentId])) { // parent exists
			$itemReferences[$parentId][$childrenField][$id] = $item; // assign item to parent
			$itemReferences[$id] =& $itemReferences[$parentId][$childrenField][$id]; // reference parent's item in single-dimentional array
		} elseif (!$parentId || !isset($hierarchy[$parentId])) { // -- parent Id empty or does not exist. Add it to the root
			$hierarchy[$id] = $item;
			$itemReferences[$id] =& $hierarchy[$id];
		}
    */
	}
  //echo $a;
  //echo json_encode($itemReferences);
  print_r($itemReferences);
  //echo json_encode($hierarchy);
  exit;

	unset($results, $item, $id, $parentId);

	// -- Run through the root one more time. If any child got added before it's parent, fix it.
	foreach ( $hierarchy as $id => &$item ) {
		$parentId = $item[$parentIdField];

		if ( isset($itemReferences[$parentId] ) ) { // -- parent DOES exist
			$itemReferences[$parentId][$childrenField][$id] = $item; // -- assign it to the parent's list of children
			unset($hierarchy[$id]); // -- remove it from the root of the hierarchy
		}
	}




	unset($itemReferences, $id, $item, $parentId);

	return $hierarchy;
}



$app->run();
