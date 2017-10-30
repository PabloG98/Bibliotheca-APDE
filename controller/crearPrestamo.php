<?php

require_once '../php/Connection.php';
$id_ususario = $_POST['is_usuario'];
$codba = $_POST['codba'];
$fecha_prestamo = $_POST['fecha_prestamo'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$id_catalogador = $_POST['id_catalogador'];

if ($id_ususario === '' && $codba === '' && $fecha_prestamo === '' && $fecha_devolucion === '' && $id_catalogador === '') {
    
} else {
    $prestamo = mysqli_query(Connection::getInstance()->conectar(), "INSERT INTO librarydb.prestamos (id_usuario, codba, fecha_prestamo, fecha_devolucion, id_catalogador) VALUES (" . $id_ususario . ", '" . $codba . "', '" . $fecha_prestamo . "', '" . $fecha_devolucion . "', " . $id_catalogador . ");");
    if (mysqli_num_rows($prestamo) != o) {
        echo '<div class="container">';
        echo '<hr>';
        echo '<div class="alert alert-success alert-dismissable fade in">';
        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo '<strong>Excelente!</strong> Préstamo creado con éxito. Este es su código de préstamo: <u>' . $prestamo["id_prestamo"] . '</u>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="container">';
        echo '<hr>';
        echo '<div class="alert alert-danger alert-dismissable fade in">';
        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo '<strong>ERROR!</strong> No se pudo crear el préstamo, verifíque sus datos.';
        echo '</div>';
        echo '</div>';
    }
}