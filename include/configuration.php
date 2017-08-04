<?php
	session_start();
	class Sql {
		public $conn;
		public function __construct(){
			return $this->conn = mysqli_connect("10.0.1.5", "root", "Laboratorio", "actar");
		}
		public function query($string_query){
			return mysqli_query($this->conn, $string_query);
		}
		public function select($string_query){
			$result = $this->query($string_query);
			$data = array();
		    while ($row = mysqli_fetch_array($result)) {
		    	foreach ($row as $key => $value) {
		    		$row[$key] = utf8_encode($value);
		    	}
		        array_push($data, $row);
		    }
		    unset($result);
		    return $data;
		}
		public function __destruct(){
			mysqli_close($this->conn);
		}
	}

	$GLOBALS['$analiseSurvey'] = 1;

	$sql = new Sql();
	$result1 = $sql->select("
		SELECT
			COUNT(actar.tb_vendors.idVendor)
		FROM
			actar.tb_vendors;");
	$GLOBALS['$glb_Vendors_Total'] = intval($result1[0][0]);

	$result1 = $sql->select("
		SELECT
			COUNT( actar.tb_departamentos.idDepartamento )
		FROM
			actar.tb_departamentos;");
	$GLOBALS['$glb_Departamento_Total'] = intval($result1[0][0]);

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
			count(*)
		FROM
			actar.tb_funcionarios
		WHERE analiseFuncionario = ' . intval($GLOBALS['$analiseSurvey']) . ';');
	$GLOBALS['$qlb_Funcionarios_Total'] = intval($result1[0][0]);

	unset($result1, $sql);
?>
