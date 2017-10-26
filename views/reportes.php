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
            .panel-primary > .panel-heading{
                background-color: #0c2c5a;
                border-color: #0c2c5a;
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
                        <li><a href="circulacion.php" style="color:white"><span class="glyphicon glyphicon-globe"></span> Circulación</a></li>
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
                        <!--<li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>-->
                    </ul>
                </div>
                <div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header text-center"><b>Reportes</b></h1>
                    <div class="container form-group">
                        <label class="col-sm-2 control-label">Tipo de reporte:</label>
                        <div class="col-sm-3">
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
                    </div>
                    <div class="container" id="reportes"></div>
                    <div class="container" id="div_print"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
        <script src="../js/jsPDF-1.3.2/jsPDF-1.3.2/dist/jspdf.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <link rel="stylesheet" href="http://tympanus.net/Tutorials/CSS3Tables/css/style.css" type="text/css" media="screen"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#btn-exportar").on("click", function () {

                    var doc = new jsPDF();
                    var imgWidth = 140;
                    var positionY = 20;
                    var positionX = 20;

                    doc.setFontSize(15);
                    doc.text(15, 15, "Bibliotheca - APDE");

                    html2canvas($('#contenedor'), {
                        onrendered: function (canvas) {
                            doc.addImage(positionX, positionY, 140, imgWidth);
                            doc.save('reporte.pdf');
                        }
                    });

                });
            });
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
            function exportar(form) {
                $(document).ready(function () {
                    var doc = new jsPDF();
                    var imgHeight = 140;
                    var imgWidth = 140;
                    var positionY = 20; 
                    var positionX = 20;
                    var empty = $('#div_print').is(':empty');
                    if (!empty) {
                        doc.setFontSize(15);
                        doc.text(15, 15, "Reportes Bibliotheca APDE");
                        html2canvas($("#div_exportar"), {
                            onrendered: function (canvas) {
                                var img = canvas.toDataURL("../img/logoapde.jpg");
				doc.addImage(img, 'JPEG', positionX ,  positionY, 140, imgWidth);
                                doc.save('reportes.pdf');
                            }
                        });
                    } else {
                        alert("No hay datos para generar su PDF");
                    }
                });
            }
        </script>
        <script type="text/javascript">
            function boletin(form) {
                $(document).ready(function () {
                    $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                    if (($('#fechaibo').val().trim() === '') && ($('#fechafbo').val().trim() === '')) {
                        alert("No hay fechas a evaluar.");
                    } else {
                        $.ajax({
                            url: '../controller/reportBoletin.php',
                            data: {fechaibo: $('#fechaibo').val().trim(), fechafbo: $('#fechafbo').val().trim()},
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#div_print').html(sucess);
                            }
                        });
                    }
                });
            }
        </script>
        <script type="text/javascript">
            function multas(form) {
                $(document).ready(function () {
                    $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                    if (($('#fechaicomu').val().trim() === '') && ($('#fechafcomu').val().trim() === '')) {
                        alert("No hay fechas a evaluar.");
                    } else {
                        $.ajax({
                            url: '../controller/reportMultas.php',
                            data: {fechaicomu: $('#fechaicomu').val().trim(), fechafcomu: $('#fechafcomu').val().trim()},
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#div_print').html(sucess);
                            }
                        });
                    }
                });
            }
        </script>
        <script type="text/javascript">
            function catpormes(form) {
                $(document).ready(function () {
                    $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                    if (($('#fechaiecpm').val().trim() === '') && ($('#fechafecpm').val().trim() === '')) {
                        alert("No hay fechas a evaluar.");
                    } else {
                        $.ajax({
                            url: '../controller/reportCatMes.php',
                            data: {fechai: $('#fechaiecpm').val().trim(), fechaf: $('#fechafecpm').val().trim()},
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
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#t_reporte').on('change', function (e) {
                    var boletin = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechaibo' type='text' class='form-control' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechafbo' type='text' class='form-control' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div><hr><div class='text-center btn-group'><button onclick='boletin(this.form)' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Preview</button><button id='b_print' name='b_print' type='button' class='btn btn-info ipt'><scan class='glyphicon glyphicon-print'></scan> Print</button><button onclick='exportar(this.form)' type='button' class='btn btn-success'><scan class='glyphicon glyphicon-save'></scan> Save as PDF</button></div></div></div>";
                    var comu = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique la fecha de prestamo</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha de Inicial a evaluar:</label><div class='col-sm-2'><input id='fechaicomu' type='date' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de Final a evaluar:</label><div class='col-sm-2'><input id='fechafcomu' type='date' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div><div class='btn-group'><button onclick='multas(this.form)' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Preview</button><button id='b_print' name='b_print' type='button' class='btn btn-info ipt'><scan class='glyphicon glyphicon-print'></scan> Print</button><button onclick='exportar(this.form)' type='button' class='btn btn-success'><scan class='glyphicon glyphicon-save'></scan> Save as PDF</button></div></div></div></div>";
                    var ecapormes = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechaiecpm' type='text' class='form-control' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechafecpm' type='text' class='form-control' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div><div class='btn-group'><button onclick='catpormes(this.form)' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Preview</button><button id='b_print' name='b_print' type='button' class='btn btn-info ipt'><scan class='glyphicon glyphicon-print'></scan> Print</button><button id='btn-exportar' type='button' class='btn btn-success'><scan class='glyphicon glyphicon-save'></scan> Save as PDF</button></div></div></div></div>";
                    var epormes = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el tipo de reporte que desea</label></div><div class='container'><div class='form-group'><label class='col-sm-2 control-label'>Tipo de reporte:</label><div class='col-sm-2'><select class='form-control' name='t_repor' id='t_repor'><option>Elija una opción</option><option value='pres'>Préstamos</option><option value='ps'>Préstamos en sala</option><option value='pad'>Préstamos a domicilio</option></select></div></div></div><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div><div class='btn-group'><button onclick'' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-picture'></span> Preview</button><button type='button' class='btn btn-info ipt'><scan class='glyphicon glyphicon-print'></scan> Print</button><button onclick='exportar(this.form)' type='button' class='btn btn-success'><scan class='glyphicon glyphicon-save'></scan> Save as PDF</button></div></div></div></div>";
                    var e = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el tipo de reporte que desea</label></div><div class='container'><div class='form-group'><label class='col-sm-2 control-label'>Tipo de reporte:</label><div class='col-sm-2'><select class='form-control' name='t_report' id='t_repor'><option>Elija una opción</option><option value='cont'>Continuas</option><option value='discont'>Discontinuas</option></select></div></div></div><div class='form-group'><label> Ingrese los códigos de barra</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Items:</label><div class='col-sm-2'><input id='coi' type='text' class='form-control'></div><label class='col-sm-2 control-label'>al</label><div class='col-sm-2'><input id='cof' type='text' class='form-control'></div></div></div><div class='form-group'><label> Ingrese la posición donde empezará a imprimir</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fila:</label><div class='col-sm-2'><input id='fila' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Columna:</label><div class='col-sm-2'><input id='columna' ";
                    var et = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique rango de no. de inventario</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>No. Inicial:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. Final:</label><div class='col-sm-2'><input id='rf' type='text' class='form-control'></div></div></div><div class='form-group'><label> Ingrese la posición donde empezará a imprimir</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fila:</label><div class='col-sm-2'><input id='fila' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Columna:</label><div class='col-sm-2'><input id='columna' type='text' class='form-control' placeholder='' value=''></div></div></div></div></div>";
                    var hmo = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el mfn que desea consultar</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>mfn:</label><div class='col-sm-2'><input id='mfn' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>";
                    var hma = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el código de barras que desea consultar</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Código de barras:</label><div class='col-sm-2'><input id='coba' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>";
                    var hu = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el carné a consultar</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>No. Carné:</label><div class='col-sm-2'><input id='carnet' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>";
                    var lo = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique rango de no. de inventario</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>No. Inicial:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. Final:</label><div class='col-sm-2'><input id='rf' type='text' class='form-control'></div></div></div><div class='form-group'><label> Ingrese la posición donde empezará a imprimir</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fila:</label><div class='col-sm-2'><input id='fila' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Columna:</label><div class='col-sm-2'><input id='columna' type='text' class='form-control'></div></div></div></div></div>";
                    var lodis = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Ingrese los códigos de barras</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>No. 1:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 2:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 3:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 4:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 5:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 6:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 7:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. 8:</label><div class='col-sm-2'><input id='rf' type='text' class='form-control'></div></div></div><div class='form-group'><label> Ingrese la posición donde empezará a imprimir</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fila:</label><div class='col-sm-2'><input id='fila' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Columna:</label><div class='col-sm-2'><input id='columna' type='text' class='form-control'></div></div></div></div></div>";
                    var lose = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique rango de no. de inventario</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>No. Inicial:</label><div class='col-sm-2'><input id='ri' type='text' class='form-control'></div></div><div class='form-group'><label class='col-sm-2 control-label'>No. Final:</label><div class='col-sm-2'><input id='rf' type='text' class='form-control'></div></div></div><div class='form-group'><label> Ingrese la posición donde empezará a imprimir</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fila:</label><div class='col-sm-2'><input id='fila' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Columna:</label><div class='col-sm-2'><input id='columna' type='text' class='form-control'></div></div></div></div></div>";
                    var mco = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Tipo de consulta:</label><div class='col-sm-2'><select class='form-control' name='t_repor' id='t_repor'><option>Elija una opción</option><option value='gen'>General</option><option value='sala'>En sala</option><option value='domi'>A domicilio</option></select></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control'></div></div></div></div></div>";
                    var t10 = "<hr><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label> Indique el rango de fecha</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Fecha inicial:</label><div class='col-sm-2'><input id='fechai' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha final:</label><div class='col-sm-2'><input id='fechaf' type='text' class='form-control' placeholder='' value=''></div></div><div class='form-group'><label class='col-sm-2 control-label'>Fecha de reporte:</label><div class='col-sm-2'><input disabled='' name='fecha' value='<?php echo date('Y-m-d'); ?>' type='date' class='form-control' placeholder='Fecha'></div></div></div></div></div>";

                    switch ($('#t_reporte option:selected').val()) {
                        case 'boletin':
                            document.getElementById('reportes').innerHTML = boletin;
                            break;
                        case 'comu':
                            document.getElementById('reportes').innerHTML = comu;
                            break;
                        case 'ecapormes':
                            document.getElementById('reportes').innerHTML = ecapormes;
                            break;
                        case 'epormes':
                            document.getElementById('reportes').innerHTML = epormes;
                            break;
                        case 'e':
                            document.getElementById('reportes').innerHTML = e;
                            break;
                        case 'et':
                            document.getElementById('reportes').innerHTML = et;
                            break;
                        case 'hmo':
                            document.getElementById('reportes').innerHTML = hmo;
                            break;
                        case 'hma':
                            document.getElementById('reportes').innerHTML = hma;
                            break;
                        case 'hu':
                            document.getElementById('reportes').innerHTML = hu;
                            break;
                        case 'lo':
                            document.getElementById('reportes').innerHTML = lo;
                            break;
                        case 'loso':
                            alert("Opción no habilitada, comuniquese con su administrador.");
                            break;
                        case 'lodis':
                            document.getElementById('reportes').innerHTML = lodis;
                            break;
                        case 'lose':
                            document.getElementById('reportes').innerHTML = lose;
                            break;
                        case 'mco':
                            document.getElementById('reportes').innerHTML = mco;
                            break;
                        case 't10':
                            document.getElementById('reportes').innerHTML = t10;
                            break;
                    }
                });
            });
        </script>
    </body>
</html>
