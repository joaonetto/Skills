		<?php include_once("header.php");?>
		<?php
			if (intval($id_func) > 0) {
				include_once("vendors_questions.php");
			} else {
				include_once("vendors_todos.php");
			}
		?>
