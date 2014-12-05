<?php
require ('Usuario.php');
$maestro = new Maestro();
$maestro->Create();
$maestro->Delete();
$maestro->Read_General();
$maestro->Read_Specific();
$maestro->Update();


?>