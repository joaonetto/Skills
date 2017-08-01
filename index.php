<?php
require 'include/configuration.php';
require 'lib/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);

$app->get(
    '/vendors-:id_func',
    function ($id_func) {
      $sql = new Sql();
      unset($sql);
      require_once("view/vendors.php");
    }
);

$app->get(
    '/vendorfunc-:id_func',
    function($id_func){
      $idFunc_Vendor = substr($id_func,0,1);
      $idFunc_IDFunc = substr($id_func,1,(strlen($id_func)-1));
      require_once("view/vendors_funcionarios.php");
    }
);

$app->get(
    '/techfunc-:id_func',
    function($id_func){
      $idTechFunc[0] = substr($id_func,0,1); // Referente a idTech_Area
      $idTechFunc[1] = substr($id_func,1,(strpos($id_func, '('))-2); // Referente ao idFuncionario
      $idTechFunc[2] = substr($id_func, (strpos($id_func,'(') + 1), (strpos($id_func,',') - strpos($id_func,'(')) - 1); // Referente a Quantidade de Questoes
      $idTechFunc[3] = substr($id_func, (strpos($id_func,',') + 1), (strpos($id_func,')') - strpos($id_func,',')) - 1); // Referente ao Ranking
      require_once("view/tech_funcionarios.php");
    }
);

$app->get(
    '/tech-:id_func',
    function($id_func){
      require_once("view/tech.php");
    }
);

$app->run();
