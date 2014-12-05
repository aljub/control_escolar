<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 03:44 PM
 */

require('db.php');
require('Grupo.php');
require('header.php');


if(isset($_REQUEST['idg'])){
    $idGrupo = $_REQUEST['idg'];
}else{
    $id = 0;
}
if($_POST['alumno'] != "")
{
    $alumno = new Grupo();
    $alumno->asigna_alumno_grupo($idGrupo);
}

$alumno->selectGrupo($idGrupo);
