<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 12/10/14
 * Time: 08:58 PM
 */

require('Materia.php');
require('db.php');
require('header.php');

$idPr = $_POST['idmaestro'];

$maestro = new Materia();
$maestro->selectMaestro($idPr);

/*consulta solo para obtener el nombre del profe*/
$sqlname_profe = "SELECT nombremaestro FROM maestro WHERE idmaestro = $idPr";
$result_name = mysql_query($sqlname_profe) or die("Error en $sqlname_profe");
//falta la variable del nombre

echo"<form name = 'asigno_materia' action = 'materia_asignada_listo.php' method = 'Post'>";
echo"<table>";
echo"<tr><td><center>Asignar materia a el profesor: </center></td></tr>";
echo"1";
echo"<tr><td>Materia: </td><td><select id = 'materia' name = 'materia'>";

/*se hace una consulta para obtener todas las materias*/
$sqlmateria = "SELECT * FROM materia ORDER BY idm ASC";
$resultmateria = mysql_query($sqlmateria) or die("error $sqlmateria");
while ($field = mysql_fetch_array($resultmateria)){
    $id_materia = $field['idm'];
    $materia = $field['nombrem'];

    $sql_materia_asignada = "SELECT * FROM materia_asignada WHERE idmaestro = $idPr AND idmateria = $id_materia ";
    echo $sql_materia_asignada;
    $result_materia_asignada = mysql_query($sql_materia_asignada) or die ("Error en $sql_materia_asignada");
    $cuantos_asignada = mysql_num_rows($result_materia_asignada);

    if($cuantos_asignada > 0){

        //echo"<option value=''>No hay materias disponibles</option>";

    }
    else{

        echo"<option value = $id_materia>$materia</option>";
    }


}
echo"</select></td></tr>";
echo"<input type=hidden id=maestro name=maestro value=$idPr>

<tr><td colspan=2 ><center><input type=submit name='Asignar' value='Asignar materia'></center></td></tr></table></form>";
