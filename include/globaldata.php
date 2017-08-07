<?php
  $MYSQL_IP = $_ENV['MYSQL_IP'];
  //var_dump($MYSQL_IP);
  //exit;

	$GLOBALS['$analiseSurvey'] = 1;
  $GLOBALS['$myMachine'] = 'http://' . $_ENV['MYSQL_IP'] . '/';

	$sql = new Sql();

  $result1 = $sql->select('
		SELECT
			*
		FROM
			actar.tb_survey
    ORDER BY
      actar.tb_survey.idSurvey ASC;');
	$GLOBALS['$qlb_survey'] = $result1;

  $result1 = $sql->select('
		SELECT
			*
		FROM
			actar.tb_vendors
    ORDER BY
      actar.tb_vendors.nomeVendor ASC;');
	$GLOBALS['$qlb_vendors'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_tech_area.idTech_Area, actar.tb_tech_area.nomeTech_Area
		FROM
			actar.tb_tech_area
		ORDER BY actar.tb_tech_area.nomeTech_Area ASC;');
	$GLOBALS['$qlb_TechArea'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_questions_tech_area.idTech_Area,
			COUNT( actar.tb_questions_tech_area.idQuestions ) AS TechArea_Total
		FROM
			actar.tb_questions_tech_area
		WHERE
			actar.tb_questions_tech_area.idSurvey = ' . $GLOBALS['$analiseSurvey'] . '
		GROUP BY
			tb_questions_tech_area.idTech_Area;');
	$GLOBALS['$qlb_Questions_TechArea_Total'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_ferramentas.idFerramenta,
			actar.tb_ferramentas.nomeFerramenta
		FROM
			actar.tb_ferramentas
		ORDER BY
			actar.tb_ferramentas.nomeFerramenta ASC;');
	$GLOBALS['$qlb_Ferramentas'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_questions_ferramentas.idFerramenta,
			COUNT( actar.tb_questions_ferramentas.idFerramenta ) AS Ferramentas_Total
		FROM
			actar.tb_questions_ferramentas
		WHERE
			actar.tb_questions_ferramentas.idSurvey = ' . $GLOBALS['$analiseSurvey'] . '
		GROUP BY
			actar.tb_questions_ferramentas.idFerramenta;');
	$GLOBALS['$qlb_Questions_Ferramentas_Total'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_softskills.idSoftSkills,
			actar.tb_softskills.nomeSoftSkills
		FROM
			actar.tb_softskills
		ORDER BY
			actar.tb_softskills.nomeSoftSkills ASC;');
	$GLOBALS['$qlb_SoftSkills'] = $result1;

	$result1 = $sql->select('
		SELECT
			actar.tb_questions_softskills.idSoftSkills,
			COUNT( actar.tb_questions_softskills.idSoftSkills) AS SoftSkills_Total
		FROM
			actar.tb_questions_softskills
		WHERE
			actar.tb_questions_softskills.idSurvey = ' . $GLOBALS['$analiseSurvey'] . '
		GROUP BY
			actar.tb_questions_softskills.idSoftSkills;');
	$GLOBALS['$qlb_Questions_SoftSkills_Total'] = $result1;

  $result1 = $sql->select('
		SELECT
			*
		FROM
			actar.tb_funcionarios
    ORDER BY
      actar.tb_funcionarios.idFuncionario ASC;');
	$GLOBALS['$qlb_Funcionarios'] = $result1;

	$result1 = $sql->select('
		SELECT
			count(*)
		FROM
			actar.tb_funcionarios
		WHERE analiseFuncionario = ' . intval($GLOBALS['$analiseSurvey']) . ';');
	$GLOBALS['$qlb_Funcionarios_Total'] = intval($result1[0][0]);

  $result1 = $sql->select('
		SELECT
			*
		FROM
			actar.tb_departamentos
    ORDER BY
      actar.tb_departamentos.idDepartamento ASC;');
	$GLOBALS['$qlb_Departamento'] = $result1;

  $result1 = $sql->select('
		SELECT
			*
		FROM
			actar.tb_questions
    ORDER BY
      actar.tb_questions.idQuestions ASC;');
	$GLOBALS['$qlb_Questions'] = $result1;

  $result1 = $sql->select('
    SELECT
      *
    FROM
      actar.tb_questions_vendors
    ORDER BY
      actar.tb_questions_vendors.idSurvey ASC,
      actar.tb_questions_vendors.idvendor ASC,
      actar.tb_questions_vendors.idQuestions ASC;');
	$GLOBALS['$qlb_Vendors_Questions'] = $result1;

  $result1 = $sql->select('
    SELECT
      *
    FROM
      actar.tb_questions_answers
    ORDER BY
      actar.tb_questions_answers.idSurvey ASC,
      actar.tb_questions_answers.idFuncionario ASC,
      actar.tb_questions_answers.idVendor ASC,
      actar.tb_questions_answers.idQuestions ASC,
      actar.tb_questions_answers.idDepartamento ASC;');
	$GLOBALS['$qlb_Vendors_Answers'] = $result1;



 ?>
