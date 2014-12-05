<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 04:47 PM
 */

require('db.php');
require('header.php');
//require('menu.php');


Echo"   <center><h1>Iniciar Sesión</h1>
            <table align='center' bgcolor='blue'> <form name='forma' action='validacion.php' method='POST'>
            <tr><td><label for='nombre'>Usuario: </label></td>
            <td><input name='user' type='text'  placeholder='Escribe el usuario' required/><br><br></td></tr>
            <tr><td><label for='psw'>Contraseña:   </label></td>
            <td><input name='psw' type='password' placeholder='Escribe la constraseña' required/><br><br></td></tr><br><br>
            <tr><td colspan='2'><center><input name='btnguardar' type='submit' class='btn maincolor small' value='Entrar' >
            <input name='btnborrar' type='reset' value='Borrar' class='btn maincolor small'></center></td></tr>
            <br></form>";

require('footer.php');