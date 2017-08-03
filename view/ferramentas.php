<?php include_once("header.php");?>
<?php
  if (intval($id_func) > 0) {
    //include_once("header.php");
    include_once("ferramentas_questions.php");
  } else {
    include_once("ferramentas_all.php");
  }
?>
