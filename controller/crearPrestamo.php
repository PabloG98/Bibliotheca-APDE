<?php

require_once '../php/Connection.php';
$id_ususario = $_POST['is_usuario'];
$codba = $_POST['codba'];
$fecha_prestamo = $_POST['fecha_prestamo'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$id_catalogador = $_POST['id_catalogador'];

if($id_ususario === '' && $codba === '' && $fecha_prestamo === '' && $fecha_devolucion === '' && $id_catalogador === ''){
    
} else {
    $prestamo = mysqli_query(Connection::getInstance()->conectar(), "INSERT INTO librarydb.prestamos (id_usuario, codba, fecha_prestamo, fecha_devolucion, id_catalogador) VALUES (" . $id_ususario . ", '" . $codba ."', '" . $fecha_prestamo ."', '" . $fecha_devolucion ."', " . $id_catalogador .");");
    if (mysqli_num_rows($prestamo) === TRUE) {
        echo '<script type="text/javascript">alert("Prestamo creado con éxito");</<script>';
    } else {
        echo '<script type="text/javascript">alert("No se pudo crear el prestamo, revise sus datos.");</<script>';
    }
}