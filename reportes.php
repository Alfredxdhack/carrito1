<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('include/menu.php') ?>;

    <!-- INICIO DE CONTENIDO -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">    <!-- container= solo una partede la pantalla container-fluid=todo el espacio extremo a extremo -->
                <div class="row">     <!-- ayuda en resposive -->
                    <div class="col-12">
                    <h4>REGISTRAR REPORTES</h4>
                        <div class="card">
                            <div class="card-body">
                                <form action="operaciones/registrar_usuario.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12" >USUARIO: </label>
                                    <input type="text" name="usuario" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12" >TIPO_REPORTE: </label>
                                    <input type="text" name="tipo_reporte" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA_INICIO: </label>
                                    <input type="date" name="fecha_inicio" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA_FIN: </label>
                                    <input type="date" name="fecha_fin" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12" >FECHA_HORA_REPORTE: </label>
                                    <input type="date" name="fecha_hora_reporte" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-md-3 col-sm-12"> </label>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- FIN DE CONTENIDO -->
   
    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>
</html>