<?php
	session_start();
	class Sql {
		public $conn;
		public function __construct(){
			return $this->conn = mysqli_connect("10.151.0.25", "root", "Laboratorio", "actar");
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

	/*

	$result1 = $sql->select('
		SELECT
			actar.tb_questions_tech_area.idTech_Area,
			COUNT( actar.tb_questions_tech_area.idQuestions )
		FROM
			actar.tb_questions_tech_area
		WHERE
			actar.tb_questions_tech_area.idSurvey = ' . $GLOBALS['$analiseSurvey'] . '
		GROUP BY
			tb_questions_tech_area.idTech_Area;');
	$GLOBALS['$qlb_Questions_TechArea_Total'] = $result1;
	*/

	//var_dump($GLOBALS['$qlb_Questions_TechArea_Total']);
	exit;

	$result1 = $sql->select('
		SELECT
			count(*)
		FROM
			actar.tb_funcionarios
		WHERE analiseFuncionario = ' . intval($GLOBALS['$analiseSurvey']) . ';');
	$GLOBALS['$qlb_Funcionarios_Total'] = intval($result1[0][0]);


	unset($result1, $sql);
?>
