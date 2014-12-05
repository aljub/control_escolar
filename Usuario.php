<?php

class Usuario {
    private $id,$nombre,$apellido_paterno,$apellido_materno,$telefono,$calle,$numero_exterior,$numero_interior,$colonia,$municipio,$estado,$cp,$correo,$usuario,$contraseña,$nivel,$estatus;

    public function Create($nombre,$apellido_paterno,$apellido_materno,$nivel){

    $insert01 = "INSERT INTO usuario (nombre,apellido_paterno,apellido_materno,nivel,estatus) VALUES (' $nombre','$apellido_paterno','$apellido_materno',$nivel,1)";
       // echo $insert01;
      $execute01 = mysql_query($insert01) or die("muere insercion!!");
       // echo $execute01;

    }

    public function Read_General(){
        $sql01 = "SELECT * FROM usuario WHERE estatus = 1 ORDER BY apellido_paterno ASC; ";
        $result01= mysql_query($sql01)or die ("Error sql0");
        echo"<div style='margin-top:10%; margin-bottom:10%; '>";
        echo"<table border=1>";
        echo"<tr><td colspan='5'>Lista de usuarios</td></tr>";
        echo"<tr></tr><td>ID</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td></tr>";

         while($field = mysql_fetch_array($result01)){
        $this->ID=$field['id'];
        $this->Nombre=$field['nombre'];
        $this->Apellidop=$field['apellido_paterno'];
        $this->Apellidom=$field['apellido_materno'];
        $this->Nivel=$field['nivel'];
        switch($this->Nivel){
            case 1:
                    $type ="Administrador";
            break;
            case 2:
                $type="Maestro";
            break;
            case 3:
                 $type="Alumno";
            break;


        }
        echo"<tr><td>$this->ID</td><td>$this->Nombre</td><td>$this->Apellidop</td><td>$this->Apellidom</td><td>$type</td></tr>";
     }
        echo"</table>";
        echo"</div>";
    }

    public function Read_Specific($id){
        $sql0 = "SELECT * FROM usuario WHERE estatus = 1 AND id=$id ORDER BY apellido_paterno ASC; ";
        $result0= mysql_query($sql0)or die ("Error sql0");
        while($field = mysql_fetch_array($result0)){
            $this->ID=$field['id'];
            $this->Nombre=$field['nombre'];
            $this->Apellidop=$field['apellido_paterno'];
            $this->Apellidom=$field['apellido_materno'];
            $this->Nivel=$field['nivel'];
            echo "<br>Id: ".$this->ID;
            echo "<br>Nombre: ".$this->Nombre;
            echo "<br>Apellido P: ".$this->Apellidop;
            echo "<br>Apellido M: ".$this->Apellidom;
            echo "<br>Nivel: ".$this->Nivel;
        }
    }

    public function Update($nombreup,$apepa,$idup){
      $update01 = "UPDATE usuario SET nombre='$nombreup',apellido_paterno='$apepa' WHERE id=$idup";
        echo$update01;
        $result02=mysql_query($update01) or die("muere update");

    }

    public function Delete($iddel){
        $delete01 = "DELETE FROM usuario WHERE id=$iddel";
        echo$delete01;
        $result03=mysql_query($delete01) or die("muere update");

    }
}
