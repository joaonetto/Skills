<?php include_once("header.php");?>
<?php
  if (intval($id_func) > 0) {
    include_once("softskills_questions.php");
  } else {
    include_once("softskills_all.php");
  }
?>
