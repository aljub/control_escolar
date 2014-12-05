<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 13/10/14
 * Time: 03:00 AM
 */

class Grupo {
    private $id_gpo;
    private $nombre_gpo;
    private $avatar_gpo;
    private $orden_gpo;
    private $estatus;

    public function createGpo(){
        echo"crear grupo";
    }
    public function readGpo(){

    }
    public function readSpecificGpo(){

    }
    public function updateGpo(){

    }
    public function deleteGpo(){

    }
    public function UsuarioAlumno($nivel){
        echo "<center><b>Alumnos</b></center>";
        $sqlUsuario = "SELECT * FROM usuario  where nivel=$nivel";
        $resultUsuario = mysql_query($sqlUsuario)or die("Error en la consulta");
        while($field = mysql_fetch_array($resultUsuario)){
            $idAlum = $field['id'];
            $nombreAlum = $field['nombre'];
            $appAlum= $field['apellido_paterno'];
            $apmAlum = $field['apellido_materno'];

            $sqlAsignada="SELECT * FROM grupo_asignado WHERE id_alumno_asignado = $idAlum";
            $resultAsignada = mysql_query($sqlAsignada)or die("Error en la consulta");
            $cuantosAsignada = mysql_num_rows($resultAsignada);


            if($cuantosAsignada > 0){
                //echo "Todos los alumnos han sido asignados";

            }else{
                echo "<center><input type='checkbox' name='alumno[]' id='alumno' value='$idAlum'/> $nombreAlum $appAlum $apmAlum <br/></center>";

            }
        }




    }
    public function GrupoUsuario()
    {

        $sqlGrupo = "SELECT * from grupo ORDER BY idg";
        $consultaGrupo = mysql_query($sqlGrupo);
        $cuantosGrupo = mysql_num_rows($consultaGrupo);
        if ($consultaGrupo != 0) {
            echo "<tr><td>Grupo: <select name ='idg' id='idg'>";
            for ($y = 0; $y < $cuantosGrupo; $y++) {

                $idg = mysql_result($consultaGrupo, $y, 'idg');
                $grupo = mysql_result($consultaGrupo, $y, 'nombreg');
                echo "<option value = '$idg'>$grupo</option> ";

            }
        } else {
            echo "No hay maestros en la Base de Datos";
        }
    }

    public function asigna_alumno_grupo($idgpo)
    {
        if (is_array($_POST['alumno'])) {
            // realizamos el ciclo
            while (list($key, $value) = each($_POST['alumno'])) {
                $sql = mysql_query("INSERT INTO grupo_asignado (id_gpo_alumno, id_alumno_asignado) VALUES ($idgpo,$value)");
            }
        }

    }

       public function selectGrupo($idgpo)
    {

        echo "<center><b>Resultados de alumnos asignadas al grupo </b></center>";

        $sqlReadSpecific = "select * from grupo_asignado where  id_gpo_alumno = $idgpo ";
        $resultReadSpecific = mysql_query($sqlReadSpecific) or die ("Error en $sqlReadSpecific");
        echo "<div >";
        echo "<table >";
        echo "<tr><td colspan='3' aling=center ><strong>Lista de materias</strong><strong></td></tr>";
        echo "<tr><th>Grupo</th><th>Alumno</th><th>Eliminar</th></tr>";
        while ($field = mysql_fetch_array($resultReadSpecific)) {
            $this->id = $field['id_asignacion_gpo'];
            $grupo = $field['id_gpo_alumno'];
            $this->alumno = $field ['id_alumno_asignado'];

            $alumno = $this->alumno = $field['id_alumno_asignado'];

            $sql = "SELECT * FROM grupo WHERE idg=$grupo;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreGrupo = mysql_result($consulta, 0, 'nombreg');


            $sql = "SELECT * FROM usuario WHERE id=$alumno;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreAlumno = mysql_result($consulta, 0, 'nombre');
            $appAlumno = mysql_result($consulta, 0, 'apellido_paterno');
            $apmAlumno = mysql_result($consulta, 0, 'apellido_materno');


            echo "<tr><td>$nombreGrupo</td><td>$nombreAlumno $appAlumno $apmAlumno</td><td><a href='elimina_alumno_asignado.php?idAlumno=$alumno&&idGrupo=$idgpo'>X </a></td></tr>";
        }
    }

    public function selectGrupo2($idgpo)
    {

        echo "<center><b>Resultados de alumnos asignadas al grupo </b></center>";

        $sqlReadSpecific = "select * from grupo_asignado where  id_gpo_alumno = $idgpo ";
        $resultReadSpecific = mysql_query($sqlReadSpecific) or die ("Error en $sqlReadSpecific");
        echo "<div >";
        echo "<table >";
        echo "<tr><td colspan='3' aling=center ><strong>Lista de materias</strong><strong></td></tr>";
        echo "<tr><th>Grupo</th><th>Alumno</th></tr>";
        while ($field = mysql_fetch_array($resultReadSpecific)) {
            $this->id = $field['id_asignacion_gpo'];
            $grupo = $field['id_gpo_alumno'];
            $this->alumno = $field ['id_alumno_asignado'];

            $alumno = $this->alumno = $field['id_alumno_asignado'];

            $sql = "SELECT * FROM grupo WHERE idg=$grupo;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreGrupo = mysql_result($consulta, 0, 'nombreg');


            $sql = "SELECT * FROM usuario WHERE id=$alumno;";
            $consulta = mysql_query($sql) or die("Error consulta primaria" . MYSQL_ERROR());
            $nombreAlumno = mysql_result($consulta, 0, 'nombre');
            $appAlumno = mysql_result($consulta, 0, 'apellido_paterno');
            $apmAlumno = mysql_result($consulta, 0, 'apellido_materno');



        }
    }


    public function borrar_asignacion($id_alumno)
    {


        $sqlUpdateSpecific = "DELETE FROM grupo_asignado where id_alumno_asignado=$id_alumno ";
        echo $sqlUpdateSpecific;
        $resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");

    }


}


