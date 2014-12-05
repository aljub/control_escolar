<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 13/10/14
 * Time: 02:58 AM
 */

require('Materia.php');
require('db.php');
require('Grupo.php');
require('header.php');




$grupo = new Grupo();

echo "<form name=grupo action=asigna_gpo.php method=Post>
<table align='center'>

<tr><td colspan='2'> <center><strong>Asignar Grupo</strong></center><br></td></tr>";

$grupo->UsuarioAlumno(2);
$grupo->GrupoUsuario();
?>

<tr><td><center><br><input type="submit" name="Asignar" value="Asignar"></center></td></tr>