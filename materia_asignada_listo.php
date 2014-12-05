<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 13/10/14
 * Time: 01:20 AM
 */

require('Materia.php');
require('db.php');
require('header.php');

$idp_listo = $_POST['maestro'];
$idm_listo = $_POST['materia'];
echo $idp_listo;
echo $idm_listo;

$materia = new Materia();
$materia ->asignarMateriaMaestro($idm_listo,$idp_listo);
echo"<a href='testMateria.php'>Siguiente</a>";