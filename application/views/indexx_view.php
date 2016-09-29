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
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <style type="text/css">
        .elecciones-flujos{
            background-image: url("<?php echo base_url('assets/imagenes/bg_mod_elecciones.jpg')?>");
            border-bottom: 2px solid #ffc905;
            border-top: 2px solid #ffc905;
            padding: 14px 22px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 26px;
            padding-right: 26px;
        }
    </style>
</head>
<body>
    <div class="mainWrap">
        <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
        <nav>
            <ul class="menu">
                <li class="movil"><a href="#">Viu!</a></li>
                <li class="movil"><a href="#">¡Vamos!</a></li>
                <li class="movil"><a href="#">Ruedas</a></li>
                <li class="movil"><a href="#">MenúPerú</a></li>
                <li class="movil"><a href="#">Casa</a></li>
                <li class="movil"><a href="#">El Dominical</a></li>
                <li class="movil"><a href="#">Urbania</a></li>
                <li class="movil"><a href="#">Neoauto</a></li>
                <li class="movil"><a href="#">Aptitus</a></li>
            </ul>
        </nav>
    </div><!--end mainWrap-->
    <div class="container ec-apertura">
        <br/>
        <div class="row">
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-sm">Ingresa</button>&nbsp;
                <button type="button" class="btn btn-default btn-sm">Registrate</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-default btn-sm">Suscríbete</button>
            </div>
            <div class="col-lg-4 text-center" style="top: 7px;">
                <?php echo $fecha;?>
                <br/><br/>
                <img class="imgsus" src="<?php echo base_url('assets/imagenes/ec_logo.png')?>">
                <br/><br/>
            </div>
            <div class="col-lg-4" style="top: 3px;">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('assets/imagenes/btn_suscriptores.png')?>">
                    </div>
                    <div class="col-lg-6 pull-left">
                        <div class="input-group">
                            <input type="text" class="buscar" placeholder="Buscar"/>
                            <button type="submit" class="buscarbtn">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                        <div class="vg-social">
                            <ul>
                                <li class="fb">
                                    <a class="btn btn-social-icon btn-facebook pull-right"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li class="tw">
                                    <a class="btn btn-social-icon btn-google pull-right"><span class="fa fa-google"></span></a>
                                </li>
                                <li class="gp">
                                    <a class="btn btn-social-icon btn-twitter pull-right"><span class="fa fa-twitter"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </div>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background: #BDBDBD;border: 0px;margin-bottom: 0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="imgsus1" src="<?php echo base_url('assets/imagenes/ec_logo.png')?>">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="tipoletra" href="#"><b class="letra3">POLITICA</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">ECONOMIA</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">OPINION</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">SOCIEDAD</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">MUNOD</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">TECNO</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">WUF</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">LUCES</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">TV</b></a></li>
                    <li><a class="tipoletra" href="#"><b class="letra3">DT</b></a></li>
                    <li class="colorplay">
                        <a class="tipoletra" href="#">
                            <b>PLAY</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container ec-apertura">
        <br/>
        <div class="row elecciones-flujos">
            <!--<div class="col-lg-3">-->
                <div class="thumbnail f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/opinion.jpg')?>" alt="imagen">
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
<!--            </div>
            <div class="col-lg-3">-->
                <div class="thumbnail  f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/mundo.jpg')?>" alt="imagen">
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
<!--            </div>
            <div class="col-lg-3">-->
                <div class="thumbnail  f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/opinion2.jpg')?>" alt="imagen">
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
<!--            </div>
            <div class="col-lg-3">-->
                <div class="thumbnail  f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/mundodos.jpg')?>" alt="imagen">
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
                 <div class="thumbnail  f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/politica.jpg')?>" alt="imagen">
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
            <!--</div>-->
        </div>
    </div>
    </body>
</html>