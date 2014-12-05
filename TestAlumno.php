<?php
require ('Usuario.php');
$alumno = new Alumno();
$alumno->Create();
$alumno->Delete();
$alumno->Read_General();
$alumno->Read_Specific();
$alumno->Update();

?>