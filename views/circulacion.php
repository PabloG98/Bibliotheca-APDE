<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head><link rel="icon" href="../img/ico-apde.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Circulación - APDE Bibliotheca</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .panel-primary > .panel-heading{
                background-color: #0c2c5a;
                border-color: #0c2c5a;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 100%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 500px;
                top: 0;
                width: 50%; /* Full width */
                height: 50%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
            }

            /* Modal Content */
            .modal-content {
                background-color: #0b2e5c;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #0c2c5a">
            <div class="container-fluid">
                <img class="img-circle" style="float: left;height:55px;width:65px;margin:2px 1%" src="../img/logoapde.jpg"/>
                <div class="text-center navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p style="color:white" class="navbar-brand">Bibliotheca</p>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar" style="background: #0b2e5c">
                    <ul class="nav nav-sidebar">
                        <li><a href="../index.php" style="color:white"><span class="glyphicon glyphicon-search"></span> Catalogación</a></li>
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-globe"></span> Circulación</a></li>
                        <li><a href="reportes.php" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header text-center"><b>Estación de circulación</b></h1>
                    <div class="container">
                        <div class="form-group">
                            <div class='panel panel-primary'>
                                <div class='panel-heading'></div>
                                <div class='panel-body'>
                                    <div class='form-group'>
                                        <label> Solicitud de datos</label>
                                    </div>
                                    <div class='form-horizontal'>
                                        <div class='form-group'>
                                            <label class='col-sm-2 control-label'>Identificación:</label>
                                            <div class='col-sm-2'>
                                                <input id='id' type='text' class='form-control' value=''>
                                            </div>
                                            <div class='btn-group'>
                                                <button id='btn-buscar' type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span> Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="../controller/crearPrestamo.php" method="post">
                        <div class="container" id="datos_u"></div>
                        <div class="container" id="prestamo"></div>
                        <div class="container" id="devolver"></div>
                        <div class="container" id="renovar"></div>
                        <div class="container" id="pagar"></div>
                        <div class="container" id="d_libro"></div>
                        <div class="container" id="c_prestamo"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">
        function show(bloq) {
            obj = document.getElementById(bloq);
            obj.style.display = (obj.style.display == 'none') ? 'block' : 'none';
        }
    </script>
    <script type="text/javascript">
        function cprestamo(form) {
            $(document).ready(function () {
                var prestamo = "<h2 class='text-center'>Rango de fecha</h2><div class='container'><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label>Rango de fechas</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha de entrada:</label><div class='col-sm-3'><input id='fecha_prestamo' name='fecha_prestamo' type='date' class='form-control' value='<?php echo date("Y-m-d"); ?>'></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de devolución:</label><div class='col-sm-3'><input id='fecha_devolucion' name='fecha_devolucion' type='date' class='form-control' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Catalogador:</label><div class='col-sm-3'><select class='form-control' name='id_catalogador' id='id_catalogador'><option>Eliga un usuario</option><option value='135'>Byron Fuentes</option><option value='156'>Gabriela Camacho</option><option value='160'>Nanci Sigüénza</option><option value='149'>Patricia Brañas</option></select></div></div><div class='text-center btn-group'><button onclick='crearPrestamo(this.form)' type='submit' class='btn btn-success'><span class='glyphicon glyphicon-ok'></span> Crear Prestamo</button></div></div></div></div></div>";
                document.getElementById('c_prestamo').innerHTML = prestamo;
            });
        }
    </script>
    <script type="text/javascript">
        function prestar(form) {
            $(document).ready(function () {
                var empty_dos = $('#datos_u').is(':empty');
                var vacio = $('#vacio').is(':empty');
                var prestamo = "<h2 class='text-center'>Datos del libro</h2><div class='container'><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label>Datos del libro</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Co. Barras:</label><div class='col-sm-2'><input id='idco' type='text' class='form-control' value='' autofocus=''></div><div class='btn-group'><button onclick='buscarco(this.form)' type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span> Buscar</button></div></div></div></div></div><div id='d_libro' class='container'></div></div>";
                if (empty_dos) {
                    alert("No hay datos, por favor rellenar los campos");
                } else if (vacio) {
                    document.getElementById('prestamo').innerHTML = '';
                } else {
                    alert("Prestamo en proceso...");
                    document.getElementById('prestamo').innerHTML = prestamo;
                    $("#d_libro").empty();
                    $("#devolver").empty();
                    $("#renovar").empty();
                    $("#pagar").empty();
                }
            });
        }
    </script>
    <script type="text/javascript">
        $('#btn-buscar').on('click', function () {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#id').val().trim() === '') {
                    alert("No hay ID para buscar");
                } else {
                    $.ajax({
                        url: '../controller/prestamo.php',
                        data: 'id=' + $('#id').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#datos_u').html(sucess);
                        }
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        function buscarco(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#idco').val().trim() === '') {
                    $.ajax({
                        url: '../controller/prestamoLibro.php',
                        data: 'idco=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#d_libro').html(sucess);
                        }
                    });
                } else {
                    $.ajax({
                        url: '../controller/prestamoLibro.php',
                        data: 'idco=' + $('#idco').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#d_libro').html(sucess);
                            $('#c_prestamo').empty();
                        }
                    });
                }
            });
        }
    </script>
    <script type="text/javascript">
        function crearPrestamo(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if (($('#id_usuario').val().trim() === '') && ($('#codba').val().trim() === '') && ($('#fecha_prestamo').val().trim() === '') && ($('#fecha_devolucion').val().trim() === '') && ($('#id_catalogador').val().trim() === '')) {
                } else {
                    $.ajax({
                        url: '../controller/crearPrestamo.php',
                        data: {id_usuario: $('#id_usuario').val().trim(), codba: $('#codba').val().trim(), fecha_prestamo: $('#fecha_prestamo').val().trim(), fecha_devolucion: $('#fecha_devolucion').val().trim(), id_catalogador: $('#id_catalogador').val().trim()},
                        type: "POST",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#c_prestamo').html(sucess);
                        }
                    });
                }
            });
        }
    </script>
    <script type="text/javascript">
        function renovar(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#id_usuario').val().trim() === '') {
                    $.ajax({
                        url: '../controller/renovarPrestamo.php',
                        data: 'id_usuario=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#renovar').html(sucess);
                        }
                    });
                } else {
                    $.ajax({
                        url: '../controller/renovarPrestamo.php',
                        data: 'id_usuario=' + $('#id_usuario').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#renovar').html(sucess);
                            $('#devolver').empty();
                            $("#prestamo").empty();
                            $("#pagar").empty();
                            $("#d_libro").empty();
                            $("#c_prestamo").empty();
                        }
                    });
                }
            });
        }
    </script>
    <script type="text/javascript">
        function devolver(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#id_usuario').val().trim() === '') {
                    $.ajax({
                        url: '../controller/devolverPrestamo.php',
                        data: 'id_usuario=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#devolver').html(sucess);
                        }
                    });
                } else {
                    $.ajax({
                        url: '../controller/devolverPrestamo.php',
                        data: 'id_usuario=' + $('#id_usuario').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#devolver').html(sucess);
                            $("#prestamo").empty();
                            $("#renovar").empty();
                            $("#pagar").empty();
                            $("#d_libro").empty();
                            $("#c_prestamo").empty();
                        }
                    });
                }
            });
        }
    </script>
    <script type="text/javascript">
        function pagar(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#id_usuario').val().trim() === '') {
                    $.ajax({
                        url: '../controller/pagarMulta.php',
                        data: 'id_usuario=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#pagar').html(sucess);
                        }
                    });
                } else {
                    $.ajax({
                        url: '../controller/pagarMulta.php',
                        data: 'id_usuario=' + $('#id_usuario').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#pagar').html(sucess);
                            $('#devolver').empty();
                            $("#prestamo").empty();
                            $("#renovar").empty();
                            $("#d_libro").empty();
                            $("#c_prestamo").empty();
                        }
                    });
                }
            });
        }
    </script>
</body>
</html>
