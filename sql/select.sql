/*
Consulta Questions Tech
*/
select
  *
from ((( actar.tb_questions_tech
  inner join actar.tb_survey        on actar.tb_survey.idSurvey               = actar.tb_questions_tech.idSurvey)
  inner join actar.tb_questions     on actar.tb_questions.idQuestions         = actar.tb_questions_tech.idQuestions)
  inner join actar.tb_tech          on actar.tb_tech.idTech                   = actar.tb_questions_tech.idTech)
  ;

/*
Consulta Questions Vendors
*/
select
  *
from ((( actar.tb_questions_vendors
  inner join actar.tb_survey        on actar.tb_survey.idSurvey               = actar.tb_questions_vendors.idSurvey)
  inner join actar.tb_questions     on actar.tb_questions.idQuestions         = actar.tb_questions_vendors.idQuestions)
  inner join actar.tb_vendors       on actar.tb_vendors.idVendor              = actar.tb_questions_vendors.idVendor)
  ;

/*
Consulta Questions Departamento
*/
select
  *
from ((( actar.tb_questions_departamentos
  inner join actar.tb_survey        on actar.tb_survey.idSurvey               = actar.tb_questions_departamentos.idSurvey)
  inner join actar.tb_questions     on actar.tb_questions.idQuestions         = actar.tb_questions_departamentos.idQuestions)
  inner join actar.tb_departamentos on actar.tb_departamentos.idDepartamento  = actar.tb_questions_departamentos.idDepartamento)
  ;


select * from actar.tb_questions;





  
