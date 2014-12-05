<?php

require('Materia.php');
require('db.php');
require('header.php');

/*se crea el objeto*/
$materia = new Materia();

/*formulario para realizar el combo de donde sale el maestro, hace referencia a otro archivo*/
echo"<form name=materia action=asigna_materias.php method=Post>
<table border = 1>
<tr><td colspan = 2>Asignar Maestro</td></tr>";

/*Se realiza la consulta*/
$sqlProfe = "SELECT * FROM maestro";
$resultProfe = mysql_query($sqlProfe);
$cuantosProfe = mysql_num_rows($resultProfe);

    if($resultProfe != 0){
        echo"<tr><td>Maestro: <select name = 'idmaestro' id='idmaestro'>";//cuando lo recibes la variable que se recibe debe llamarse como el id
        /*combo donde se muestran los datos del profesor*/
        for($y = 0; $y < $cuantosProfe; $y++){
            $idP = mysql_result($resultProfe, $y, 'idmaestro' );//se almacena en una variable y el vector $y luego sigue el nombre del campo como en la bd
            $nombrep = mysql_result($resultProfe, $y, 'nombremaestro');
            $apatp = mysql_result($resultProfe, $y, 'apellidopmaestro');
            $amatp = mysql_result($resultProfe, $y, 'apellidommaestro');
            echo"<option value = '$idP'>$nombrep $apatp $amatp</option>";
        }

    }
    else
    {
        echo"No hay maestros registrados";
    }
echo"</select><br><br></td></tr>";
/*boton que envia los datos de este formulario*/
echo"<tr><td colspan='2'><center><input type ='submit' name = 'seleccionar_profe'></center></center></td></tr>";
echo"</table></form>";
