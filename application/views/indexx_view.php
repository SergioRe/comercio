<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>::: Inicio</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/estilos_1.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/menu.js')?>" type="text/javascript"></script> 
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-social.css')?>" rel="stylesheet">

</head>
<body>
    <div class="mainWrap">
        <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
        <nav>
            <ul class="menu">
                <li><a href="#">Viu!</a></li>
                <li><a href="#">¡Vamos!</a></li>
                <li><a href="#">Ruedas</a></li>
                <li><a href="#">MenúPerú</a></li>
                <li><a href="#">Casa</a></li>
                <li><a href="#">El Dominical</a></li>
                <li><a href="#">Urbania</a></li>
                <li><a href="#">Neoauto</a></li>
                <li><a href="#">Aptitus</a></li>
            </ul>
        </nav>
    </div><!--end mainWrap-->
    <div class="container ec-apertura">
        <br/>
        <div class="row">
            <div class="col-lg-4">
                <button type="button" class="btn btn-sm btn-ing-reg-sus">Ingresa</button>&nbsp;
                <button type="button" class="btn btn-sm">Registrate</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-sm">Suscríbete</button>
            </div>
            <div class="col-lg-4 text-center" style="top: 7px;">
                <?php echo $fecha;?>
                <br/><br/>
                <img src="<?php echo base_url('assets/imagenes/ec_logo.png')?>">
            </div>
            <div class="col-lg-4" style="top: 3px;">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('assets/imagenes/btn_suscriptores.png')?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control"/>
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/>
        </div>
    </div>
</body>
</html>