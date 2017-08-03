<?php
  $time_start = microtime(true);
  $sql = new Sql();
  $result1 = $sql->select("
    SELECT
      actar.tb_softskills.nomeSoftSkills
    FROM
      actar.tb_softskills
    WHERE
      actar.tb_softskills.idSoftSkills = $id_func;");
  $result1 = $result1[0][0];

  $result2 = $sql->select('
    SELECT
      actar.tb_questions.idQuestions,
      actar.tb_questions.desQuestions
    FROM (( actar.tb_questions_softskills
      INNER JOIN actar.tb_survey    on actar.tb_survey.idSurvey         = actar.tb_questions_softskills.idSurvey )
      INNER JOIN actar.tb_questions on actar.tb_questions.idQuestions   = actar.tb_questions_softskills.idQuestions )
    WHERE
          ( actar.tb_survey.idSurvey                    = ' . intval($GLOBALS['$analiseSurvey']) . ' )
      and ( actar.tb_questions_softskills.idSoftSkills  = ' . $id_func . ' )
    ORDER BY
      actar.tb_questions.desQuestions ASC;');
?>
