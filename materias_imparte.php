<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 07:19 PM
 */

require('Materia.php');
require('db.php');
require('header.php');

$materias = new Materia();
$materias->readSpecificMateria(1);



require ('footer.php');
