<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vademecum</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/estilos_1.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/ext-4.2.0/resources/css/ext-all.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/admin.css')?>" type="text/css" media="screen">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/menu.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/vademecum.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/funciones.js')?>" type="text/javascript"></script>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-social.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/ext-4.2.0/ext-all.js')?>" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
    </head> 
    <body style="background-color: #BDBDBD;">
        <?php require_once(APPPATH."views/menu/menu_view.php"); ?>
        <div class="container" style="background-color: #FFFFFF;">
            <br><br><br><br>
            <div class="row" style="background-color: #FFFFFF;text-align: left;">
                <div class="col-lg-6">
                    <h4><b style="color: #31708f;">Mantenimiento Vademecum</b></h4>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                    <!--button type="button" class="btn btn-success btn-sm" id="btn-create" onclick="agregar_video_modal();">
                        <span class="glyphicon glyphicon-plus-sign"></span> <b>Agregar</b> 
                    </button-->
                </div>
            </div><br>
            <div class="col-lg-12">
                <table id="tablevademecum" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center"><b>Código</b></th>
                            <th class="text-center"><b>Nom. Menu</b></th>
                            <th class="text-center"><b>Titulo</b></th>
                            <th class="text-center"><b>Imagen</b></th>
                            <th class="text-center"><b>Destacado</b></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="resultado"></div>
    </body>
</html>