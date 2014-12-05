<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 07:24 PM
 */
require('Grupo.php');
require('db.php');
require('header.php');

$grupo = new Grupo();
$grupo->selectGrupo2(1);



require ('footer.php');