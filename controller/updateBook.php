<?php
require_once '../php/Connection.php';

$titulo = filter_input(INPUT_POST, 'titulo');
$autor = filter_input(INPUT_POST, 'autor');
$editorial = filter_input(INPUT_POST, 'editorial');
$clasificacion = filter_input(INPUT_POST, 'clasificacion');
$biblioteca = filter_input(INPUT_POST, 'biblioteca');

