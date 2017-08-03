<?php //include_once("header.php");?>
<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select('
    SELECT
  	   actar.tb_questions.desQuestions,
      actar.tb_questions_tech_area_answers.answerFuncTechArea
    FROM (( actar.tb_questions_tech_area_answers
      INNER JOIN actar.tb_funcionarios	on actar.tb_funcionarios.idFuncionario		= actar.tb_questions_tech_area_answers.idFuncionario )
      INNER JOIN actar.tb_questions		on actar.tb_questions.idQuestions			= actar.tb_questions_tech_area_answers.idQuestions )
    WHERE
          ( actar.tb_questions_tech_area_answers.idSurvey = ' . $GLOBALS['$analiseSurvey'] . ' )
  	  and ( actar.tb_questions_tech_area_answers.idTech_Area   = ' . $idTechFunc[0] . ' )
      and ( actar.tb_questions_tech_area_answers.idFuncionario = ' . $idTechFunc[1] . ' )
      and ( actar.tb_funcionarios.analiseFuncionario = 1 )
    ORDER BY
  	  actar.tb_questions.desQuestions ASC;');
?>
