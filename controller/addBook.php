<?php

require_once '../php/Connection.php';
$fecha_entrada = $_POST['fecha_entrada'];
$num_inve = $_POST['num_inve'];
$isbn = $_POST['isbn'];
$idioma = $_POST['idioma'];
$dewey = $_POST['dewey'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];

if($num_inve === '' && $isbn === '' && $idioma === '' && $dewey === '' && $titulo === '' && $autor === ''){
    
} else {
    $insert = mysqli_query(Connection::getInstance()->conectar(), "INSERT INTO librarydb.invetario (num_inventario, num_titulo, fecha_entrada) VALUES ();");
    $insert2 = mysqli_query(Connection::getInstance()->conectar(), "INSERT INTO librarydb.titulos () VALUES ();");
    $insert3 = mysqli_query(Connection::getInstance()->conectar(), "INSERT INTO librarydb");
}