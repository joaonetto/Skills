<?php
echo 'Carregando Configuration';
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
    '/funcionarios-:id_func',
    function($id_func){
      $idFunc_Vendor = substr($id_func,0,1);
      $idFunc_IDFunc = substr($id_func,1,(strlen($id_func)-1));
      require_once("view/vendors_funcionarios.php");
    }
);

$app->get(
    '/tech-:id_func',
    function($id_func){
      require_once("view/tech.php");
    }
);

$app->run();
