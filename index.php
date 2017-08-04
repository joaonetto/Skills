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
    '/tech-:id_func',
    function($id_func){
      require_once("view/tech.php");
    }
);

$app->get(
    '/techquestion-:id_func',
    function($id_func){
      $idTechQuestion[0] = substr($id_func, 0, (strpos($id_func, '(')) - 1); // Referente a idQuestion
      $idTechQuestion[1] = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));
      require_once("view/tech_individual.php");
    }
);

$app->get(
    '/techfunc-:id_func',
    function($id_func){
      $idTechFunc[0] = substr($id_func,0,1); // Referente a idTech_Area
      $idTechFunc[1] = substr($id_func,1,(strpos($id_func, '('))-2); // Referente ao idFuncionario
      $tempValue = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));

      for ($i=1; $i <= 4 ; $i++) {
        if ($i < 4) {
          $idTechFunc[$i + 1] = substr($tempValue, 0, strpos($tempValue, ','));
          $tempValue = substr($tempValue, strpos($tempValue, ',') + 1, (strlen($tempValue) - strpos($tempValue, ',') + 1));
        } elseif ($i = 4) {
            $idTechFunc[5] = $tempValue;
        }
      }
      require_once("view/tech_funcionarios.php");
    }
);

$app->get(
    '/ferramentas-:id_func',
    function($id_func){
      require_once("view/ferramentas.php");
    }
);

$app->get(
    '/ferrquestion-:id_func',
    function($id_func){
      $idFerrQuestion[0] = substr($id_func, 0, (strpos($id_func, '(')) - 1); // Referente a idQuestion
      $idFerrQuestion[1] = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));
      require_once("view/ferramentas_individual.php");
    }
);

$app->get(
    '/ferramentasfunc-:id_func',
    function($id_func){
      $idFerrFunc[0] = substr($id_func,0,1); // Referente a idFerramenta
      $idFerrFunc[1] = substr($id_func,1,(strpos($id_func, '('))-2); // Referente ao idFuncionario
      $tempValue = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));

      for ($i=1; $i <= 4 ; $i++) {
        if ($i < 4) {
          $idFerrFunc[$i + 1] = substr($tempValue, 0, strpos($tempValue, ','));
          $tempValue = substr($tempValue, strpos($tempValue, ',') + 1, (strlen($tempValue) - strpos($tempValue, ',') + 1));
        } elseif ($i = 4) {
            $idFerrFunc[5] = $tempValue;
        }
      }
      require_once("view/ferramentas_funcionarios.php");
    }
);

$app->get(
    '/softskills-:id_func',
    function($id_func){
      require_once("view/softskills.php");
    }
);

$app->get(
    '/skillsquestion-:id_func',
    function($id_func){
      $idSkillsQuestion[0] = substr($id_func, 0, (strpos($id_func, '(')) - 1); // Referente a idQuestion
      $idSkillsQuestion[1] = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));
      require_once("view/softskills_individual.php");
    }
);

$app->get(
    '/softskillsfunc-:id_func',
    function($id_func){
      $idSoftSkillsFunc[0] = substr($id_func,0,1); // Referente a idFerramenta
      $idSoftSkillsFunc[1] = substr($id_func,1,(strpos($id_func, '('))-2); // Referente ao idFuncionario
      $tempValue = substr($id_func, (strpos($id_func, '(') + 1), (strpos($id_func, ')') - strpos($id_func, '(') - 1));

      for ($i=1; $i <= 4 ; $i++) {
        if ($i < 4) {
          $idSoftSkillsFunc[$i + 1] = substr($tempValue, 0, strpos($tempValue, ','));
          $tempValue = substr($tempValue, strpos($tempValue, ',') + 1, (strlen($tempValue) - strpos($tempValue, ',') + 1));
        } elseif ($i = 4) {
            $idSoftSkillsFunc[5] = $tempValue;
        }
      }
      require_once("view/softskills_funcionarios.php");
    }
);

$app->run();
