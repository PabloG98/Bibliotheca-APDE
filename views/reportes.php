<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><link rel="icon" href="../img/ico-apde.ico" type="image/x-icon">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Reportes - APDE Bibliotheca</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
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
                <img class="responsive" style="float: left;height:50px;margin :2px 1%" src="https://pbs.twimg.com/profile_images/769193451036352512/68WIEQyg.jpg"/>
                <div class="text-center navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bibliotheca</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar" style="background: #0b2e5c">
                    <ul class="nav nav-sidebar">
                        <li><a href="../index.php" style="color:white"><span class="glyphicon glyphicon-search"></span> Catalogación</a></li>
                        <li><a href="circulacion.php" style="color:white"><span class="glyphicon glyphicon-globe"></span> Circulación</a></li>
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
                        <!--<li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>-->
                    </ul>
                    <ul class="nav nav-sidebar">
                        <!--<li><a href="">Nav item</a></li>
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                        <li><a href="">More navigation</a></li>-->
                    </ul>
                    <ul class="nav nav-sidebar">
                        <!--<li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>-->
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header text-center"><b>Reportes</b></h1>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tipo de reporte:</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="t_reporte" id="t_reporte">
                                <option>Elija una opción</option>
                                <option value="boletin">Boletin</option>
                                <option value="comu">Control de multas</option>
                                <option value="ecapormes">Estadísticas de catalogación por mes</option>
                                <option value="epormes">Estadísticas por mes</option>
                                <option value="e">Etiquetas</option>
                                <option value="et">Etiquetas de tarjetas</option>
                                <option value="hmo">Historial de modificación</option>
                                <option value="hma">Historial de un material</option>
                                <option value="hu">Historial de usuario</option>
                                <option value="lo">Lomos</option>
                                <option value="loso">Lomos SOLALTO</option>
                                <option value="lodis">Lomos discontinuos</option>
                                <option value="lose">Lomos sencillos</option>
                                <option value="mco">Materiales consultados</option>
                                <option value="t10">Top 10 libros</option>
                            </select>
                        </div>
                        <div class="btn-group">
                            <button id="btn-preview" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span> Preview</button>
                            <button id="b_print" name="b_print" type="button" class="btn btn-info ipt" onClick="printdiv('div_print')"><scan class="glyphicon glyphicon-print"></scan> Print</button>
                            <button id="btn-save" type="button" class="btn btn-success"><scan class="glyphicon glyphicon-save"></scan> Save</button>
                        </div>
                    </div>
                    <div id="reportes"></div>
                    <div id="contenedor"></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <script language="javascript">
                                function ignorar(form) {
                                    window.location.replace("../index.php");
                                }
        </script>
        <script>
            // wait for the DOM to be loaded 
            //$(document).ready(function () {
            // bind 'myForm' and provide a simple callback function 
            //  $('#myForm').ajaxForm(function () {
            //    alert("Biblioteca agregada con exito!");
            //});
            //});
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#b_print').click(function () {
                    if ($('#contenedor').val().trim() !== '') {
                        function printdiv(printpage)
                        {
                            alert("¿Desea imprimir este reporte?");
                            var headstr = "<html><head><title></title></head><body>";
                            var footstr = "</body>";
                            var newstr = document.all.item(printpage).innerHTML;
                            var oldstr = document.body.innerHTML;
                            document.body.innerHTML = headstr + newstr + footstr;
                            window.print();
                            document.body.innerHTML = oldstr;
                            return false;
                        }

                    } else {
                        alert("El campo está vacío");
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});

                $.ajax({
                    url: '../controller/reportCatMes.php',
                    data: {fechai: '', fechaf: ''},
                    type: "GET",
                    dataType: "text",
                    error: function () {
                        console.log("Error en llamada ajax.");
                    },
                    success: function (sucess) {
                        $('#contenedor').html(sucess);
                    }
                });
                $('#btn-preview').on('click', function () {
                    if (($('#fechai').val().trim() === '') && ($('#fechaf').val().trim() === '')) {
                        alert("No hay fechas a evaluar.");
                    } else {
                        $.ajax({
                            url: '../controller/reportCatMes.php',
                            data: {fechai: $('#fechai').val().trim(), fechaf: $('#fechaf').val().trim()},
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#t_reporte').on('change', function (e) {
                    switch ($('#t_reporte option:selected').val()) {
                        case 'boletin':
                            $('#reportes').append("<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>");
                            break;
                        case 'comu':
                            $('#reportes').append("<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='date' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='date' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>");
                            break;
                        case 'ecapormes':
                            $('#reportes').append("<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='date' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='date' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>");
                            break;
                    }
                });
            });
        </script>
    </body>
</html>
