<?php
require 'include/dbaccess.php';
require 'include/globaldata.php';
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

$app->get(
    '/api',
    function () {
      $tempArray = Array();
      $tempArray[0]['descricao'] = "Dados de Funcionarios";
      echo json_encode($tempArray);
      unset($tempArray);
    }
);

$app->get(
    '/api/survey',
    function () {
      $tempArray = Array();
      foreach ($GLOBALS['$qlb_survey'] as $key => $value) {
        $tempArray[$key]['idSurvey'] = $GLOBALS['$qlb_survey'][$key]['idSurvey'];
        $tempArray[$key]['dtSurvey'] = $GLOBALS['$qlb_survey'][$key]['dtSurvey'];
      }
        echo json_encode($tempArray);
        unset($tempArray);
    }
);

$app->get(
    '/api/vendors',
    function () {
      $tempArray = Array();
      foreach ($GLOBALS['$qlb_vendors'] as $key => $value) {
        $tempArray[$key]['idVendor'] = $GLOBALS['$qlb_vendors'][$key]['idVendor'];
        $tempArray[$key]['nomeVendor'] = $GLOBALS['$qlb_vendors'][$key]['nomeVendor'];
      }
        echo json_encode($tempArray);
        unset($tempArray);
    }
);


$app->get(
    '/api/funcionarios',
    function () {
      $tempArray = Array();
      foreach ($GLOBALS['$qlb_Funcionarios'] as $key => $value) {
        $tempArray[$key]['idFuncionario'] = $GLOBALS['$qlb_Funcionarios'][$key]['idFuncionario'];
        $tempArray[$key]['nomeFuncionario'] = $GLOBALS['$qlb_Funcionarios'][$key]['nomeFuncionario'];
        $tempArray[$key]['emailFuncionario'] = $GLOBALS['$qlb_Funcionarios'][$key]['emailFuncionario'];
        $tempArray[$key]['analiseFuncionario'] = $GLOBALS['$qlb_Funcionarios'][$key]['analiseFuncionario'];
      }
        echo json_encode($tempArray);
        unset($tempArray);
    }
);

$app->run();
