<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 13/10/14
 * Time: 02:03 AM
 */

require('Materia.php');
require('db.php');
require('header.php');
require('menu.php');

$maestro =$_REQUEST ['idmaestro'];
$materia =$_REQUEST ['idmateria'];
echo $maestro;
echo $materia;

$sqlUpdateSpecific = "DELETE FROM materia_asignada where idMateria=$materia and idMaestro=$maestro ";
echo $sqlUpdateSpecific;
$resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");

echo "<center><b>Se elimino la asignación</b></center>";
echo "<center><b><a href='TestMateria.php'>Continuar</a></b></center>";