<?php
	session_start();
	class Sql {
		public $conn;
		public function __construct(){
			return $this->conn = mysqli_connect("10.0.1.10", "root", "Laboratorio", "actar");
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

	$sql = new Sql();
	$result1 = $sql->select("
		SELECT
			COUNT(actar.tb_vendors.idVendor)
		FROM
			actar.tb_vendors;");
	$qtd_Vendors = intval($result1[0][0]);

	$result1 = $sql->select("
		SELECT
			COUNT( actar.tb_departamentos.idDepartamento )
		FROM
			actar.tb_departamentos;");
	$qtd_Departamento = intval($result1[0][0]);

	$result1 = $sql->select("
		SELECT
			COUNT( actar.tb_tech_area.idTech_Area )
		FROM
			actar.tb_tech_area;");
	$qtd_TechArea = intval($result1[0][0]);

	$analiseSurvey = 1;

	unset($result1, $sql);
?>
