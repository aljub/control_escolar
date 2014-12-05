<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 04:07 PM
 */

require('db.php');
require('Grupo.php');
require('header.php');

if(isset($_REQUEST['idAlumno'])){
    $id_alumno = $_REQUEST['idAlumno'];
}else{
    $id = 0;
}

$eliminarAlumno = new Grupo();
$eliminarAlumno->borrar_asignacion($id_alumno);
$eliminarAlumno->selectGrupo(2);

echo "Registro eliminado <a href='testGrupo.php'>Continuar</a>";