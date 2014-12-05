<?php

class Materia {
    private $id,$nombre,$avatar,$orden,$estatus;
    public $maestro;
    public function create_materia(){
        echo"<br>Create materia";

    }
    public function readMateriaG(){




    
    }

    public function readSpecificMateria($id){

        echo "<center><b>Resultados de consulta especifica </b></center>";
        $sqlReadGeneral = "select * from materia where idm=$id ORDER BY idm asc ";
        $resultReadGeneral = mysql_query($sqlReadGeneral)or die ("Error en $sqlReadGeneral");

        echo "<div class=carousel>";
        echo "<table class='table table-striped'  align='center'>";
        echo "<tr><td colspan='5' ><strong><center>Lista de Materias</center></strong></td></tr>";
        echo "<tr><th>ID</th><th>Nombre materia</th><th>Orden</th></tr>";
        while ($field = mysql_fetch_array($resultReadGeneral)){
            $this->idMateria = $field['idm'];
            $this->nombreMateria = $field['nombrem'];
            $this->ordenMateria = $field ['ordenm'];

            echo "<tr><td>$this->id</td><td>$this->nombreMateria</td><td>$this->ordenMateria</td></tr>";


        }

    }

    public function deleteMateria(){
        echo"<br>delete materia";

    }

    public function update_materia(){
        echo"<br>update materia";
    }

    public function asignarMateriaMaestro($id_mat,$id_pr){
        echo"Asignar materia a un maestro";
        $sql_in_profe = "INSERT INTO materia_asignada (idmateria,idmaestro) VALUE ($id_mat,$id_pr)";
        $in_prof = mysql_query($sql_in_profe) or die ("ERROR EN $sql_in_profe");






    }
    public function asignarMateriaGrupo(){


    }
    public function selectMaestro($idMaestro){
        echo"Asignar materia a  maestro";
        echo"<center>Resultados de las materias</center>";
        $sqlselectMaestro = "SELECT * FROM materia_asignada where idmaestro = $idMaestro";
        $resultselectMaestro = mysql_query($sqlselectMaestro) or die ("Error en $sqlselectMaestro");
        echo"<div>";
        echo"<table border = '1'>";
        echo"<tr><td colspan = '3'>Lista de Materias</td></td></tr>";
        echo"<tr><td>ID</td><td>Materia</td><td>Eliminar</td></tr>";
        while ($field = mysql_fetch_array($resultselectMaestro)){
            $this->id = $field['idmateriaasignada'];
            $this->materia = $field['idmateria'];
            $this->maestro = $field['idmaestro'];

            $materia = $this->materia = $field['idmateria'];

            echo "<tr><td>$this->id</td><td>$this->materia</td><td><a href='eliminar_materia_asignada.php?idmateria=$materia&idmaestro=$idMaestro'>Eliminar </a></td></tr>";

        }






    }

} 