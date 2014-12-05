<?php
    require ('Usuario.php');
    require_once('db.php');
    require("header.php");

    $usuario = new Usuario();

    if(isset($_POST['submit'])){
         switch($_POST['submit']){
            case "Alta":
                echo"<br>Bot%oacute;n: " .$_POST['submit'];
                $usuario->Create(".$_POST[name].",".$_POST[app].",".$_POST[apm].",$_POST['n']);
             break;
             case "Borrar":
                 echo"<br>Bot%oacute;n: " .$_POST['submit'];
                $usuario->Delete($_POST['del']);
            break;
            case "Modificar":
                 echo"<br>Bot%oacute;n: " .$_POST['submit'];
                 $usuario->Update(".$_POST[name_mod].",".$_POST[ape_mod].",$_POST['id_mod']);
             break;
             case "Buscar":
                 echo"<br>Bot%oacute;n" .$_POST['submit'];
                if($_POST['id_buscar']=="")
                {

                    $usuario->Read_General();
                }
                else
                {


                    $usuario->Read_Specific($_POST['id_buscar']);
                }
            break;

        }

    }

  // $usuario->Create("uhn","apepa","apema",1);

    //$usuario->Delete(15);
    //$usuario->Update("nombre","apellidooooooooooooo",15);

    //$usuario->Read_Specific(1);


     echo"<div>";
            echo'<form name=alumno action=TestUsuario.php method=Post>
                <table>
                <tr><td>Nombre(s)</td><td><input type=text name=name> </input> </td></tr>
                <tr><td>Apellido P</td><td><input type=text name=app> </input> </td></tr>
                <tr><td>Apellido M</td><td><input type=text name=apm> </input> </td></tr>
                <tr><td>Nivel:</td><td><select name=n>
                <option value=1>Administrator</option>
                <option value=2>Maetsro</option>
                <option value=3>Alumno</option>
                </select></td></tr>
                <tr><td colspan=2><input type=submit name=submit value=Alta> </input></td></tr>

                <tr><td colspan=2><input type=submit name=submit value=Borrar> </input></td>
                <td colspan=2><input type=text name=del> </input></td></tr>

                <tr><td colspan=2><input type=submit name=submit value=Modificar> </input></td>
                <td colspan=2><input type=text name=name_mod> </input></td>
                <td colspan=2><input type=text name=ape_mod> </input></td>
                <td colspan=2><input type=text name=id_mod> </input></td></tr>

                <tr><td colspan=2><input type=submit name=submit value=Buscar> </input></td>
                <td colspan=2><input type=text name=id_buscar> </input></td></tr>

                </table>
            </form>
         </div>';


$usuario->Read_General();

    require("footer.php");
?>