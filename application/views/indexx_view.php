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
        .elecciones-flujos2{
            background: #ffffff;
            border-bottom: 2px solid #ffc905;
            border-top: 2px solid #ffc905;
            padding: 14px 22px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 26px;
            padding-right: 26px;
        }
        .ec-gda {
            background: rgba(0, 0, 0, 0) url("<?php echo base_url('assets/imagenes/logo_gda.png')?>") no-repeat scroll 0 52px;
            padding: 62px 0 0 87px;
            width: 230px;
        }
    </style>
</head>
<body style="background: #eee;">
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
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">POLITICA</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">ECONOMIA</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">OPINION</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">SOCIEDAD</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">MUNOD</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">TECNO</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">WUF</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">LUCES</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">TV</b></a></li>
                    <li class="linea"><a class="tipoletra" href="#"><b class="letra3">DT</b></a></li>
                    <li class="colorplay">
                        <a class="tipoletra" target="_blank" href="<?= site_url('videos/index') ?>">
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
                    <img src="<?php echo base_url('assets/imagenes/opinion.jpg')?>" alt="imagen" style="position: relative;">
                    <button type="button" class="btn btn-sm botonencimaimg">
                       OPINIÓN
                    </button>
                    </a>
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
                    <img src="<?php echo base_url('assets/imagenes/mundo.jpg')?>" alt="imagen" style="position: relative;">
                    <button type="button" class="btn btn-sm botonencimaimg">
                       MUNDO
                    </button>
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
                    <img src="<?php echo base_url('assets/imagenes/opinion2.jpg')?>" alt="imagen" style="position: relative;">
                    <button type="button" class="btn btn-sm botonencimaimg">
                       OPINIÓN
                    </button>
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
                    <img src="<?php echo base_url('assets/imagenes/mundodos.jpg')?>" alt="imagen" style="position: relative;">
                    <button type="button" class="btn btn-sm botonencimaimg">
                       MUNDO
                    </button>
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b>Donec nec justo eget felis facilisis fermentum.Aliquam porttitor.</b>
                            </a>
                        </p>
                    </div>
                 </div>
                 <div class="thumbnail  f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/politica.jpg')?>" alt="imagen" style="position: relative;">
                    <button type="button" class="btn btn-sm botonencimaimg">
                       POLÍTICA
                    </button>
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
    <div class="container ec-apertura">
        <div class="row elecciones-flujos2">
        <div class="row">
            <div class="col-lg-4">
                <img class="imagenelecciones" src="<?php echo base_url('assets/imagenes/tres.jpg')?>" alt="imagen">
            </div>
            <div class="col-lg-4">
                <ul class="media-list main-list item_noticiax2">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?php echo base_url('assets/imagenes/uno.jpg')?>" alt="imagen">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading colorblancoletra">Lorem ipsum dolor asit amet</h4>
                            <p class="by-author colorblancoletra">By Jhon Doe</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul class="media-list main-list item_noticiax2">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="<?php echo base_url('assets/imagenes/dos.jpg')?>" alt="imagen">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading colorblancoletra">Lorem ipsum dolor asit amet</h4>
                            <p class="by-author colorblancoletra">By Jhon Doe</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br>
        </div>
    </div>
    <div class="container fondoblanco">
        <div class="row">
            <div class="col-lg-3">
                Avance
            </div>
            <div class="col-lg-4">
                Avance
            </div>
            <div class="col-lg-5">
                Avance
            </div>
        </div>
    </div>
    <div class="container ec-apertura">
        <br/>
        <div class="row">
            <div class="col-lg-3">
                <div class="ec-info">
                    <img class="imgsus2" src="<?php echo base_url('assets/imagenes/ec_logo.png')?>">
                    <ul class="legal">
                        <li itemtype="#" itemscope="">
                            <large itemprop="copyrightHolder">
                                <span itemprop="name">&copy; Empresa Editora El Comercio</span>
                            </large>
                        </li>
                        <li>Jr. Miró Quesada #300 Lima 1 Perú</li>
                        <li>Copyright&copy; Elcomercio.pe - Grupo El Comercio - Todos los derechos reservados.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ec-info">
                    <ul class="legal">
                        <li>Director General: Francisco Miró Quesada Cantuarias</li>
                        <li>Director Periodístico: Fernando Berckemeyer Olaechea</li>
                        <li>Suscripciones: <a class="legal" href="#">suscriptores@comercio.com.pe</a></li>
                        <li>Publicidad Online: <a class="legal" href="#">fonoavisos@comercio.com.pe</a></li>
                        <li>Club El Comercio: <a class="legal" href="#">clubelcomercio@comercio.com.pe</a></li>
                        <li><a class="legal" target="_blank" href="#">Compromiso de Autorregulación Comercial</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="legal">
                            <li><a class="legal" href="#">Términos y condiciones de uso</a></li>
                            <li><a class="legal" class="legal" target="_blank" href="#">Trabaja para Grupo El Comercio</a></li>
                            <li><a class="legal" target="_blank" href="#">Libro de Reclamaciones</a></li>
                            <li><a class="legal" target="_blank" href="#">Oficinas Concesionarias</a></li>
                            <li><a class="legal" href="#">Principios Rectores</a></li>
                            <li><a class="legal" href="#">Políticas de Privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="ec-gda pull-left">
                            <p class="legal1">
                                Miembro de<br>
                                Grupo de Diarios <br>América
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </div>
    <div class="container fondomostaza">
        <div class="row">
            <div class="col-lg-12">
                <div class="cnt-links">
                    <div class="t-red">Red el Comercio</div>
                </div><br>
                <div class="ec-red-links">
                    <p class="textofoorter">
                        <a class="colorletrafooter" href="#" target="_blank" title="Diario Perú21">peru21.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Diario Gestión">gestion.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Depor.com">depor.com</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Diario Trome">trome.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Aptitus">aptitus.com</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Neoauto">neoauto.com</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Urbania">urbania.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="peru.com">peru.com</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Ofertop">ofertop.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Publimetro">publimetro.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="La Prensa">laprensa.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="GEC">gec.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Club El Comercio">Club El Comercio</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="CompraBien.com">comprabien.com</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="PerúRed">Perured.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Shopin">Shopin.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Sepp">Sepp.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Clasificados">clasificados.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Pagoefectivo">pagoefectivo.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Avansys">avansys.edu.pe</a>
                        •<a class="colorletrafooter" href="#" target="_blank" title="Estilomio.com">Estilomio.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>