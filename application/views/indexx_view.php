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
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" >
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/menu.js')?>" type="text/javascript"></script> 
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-social.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <style type="text/css">
        .elecciones-flujos{
            background-image: url("<?php echo base_url('assets/imagenes/bg_mod_elecciones.jpg')?>");
            border-bottom: 0px solid #ffc905;
            border-top: 0px solid #ffc905;
            padding: 14px 22px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 26px;
            padding-right: 26px;
        }
        .elecciones-flujos2{
            background: #ffffff;
            border-bottom: 0px solid #ffc905;
            border-top: 0px solid #ffc905;
            padding: 14px 22px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 26px;
            padding-right: 26px;
        }
        .elecciones-flujos3{
            background: #252525;
            border-bottom: 2px solid #252525;
            border-top: 2px solid #252525;
            padding: 14px 22px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px;
        }
        .elecciones-flujos4{
            background: #FFFFFF;
            padding: 10px 0px 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px;
            height: 35px;
        }
        .ec-gda {
            background: rgba(0, 0, 0, 0) url("<?php echo base_url('assets/imagenes/logo_gda.png')?>") no-repeat scroll 0 52px;
            padding: 62px 0 0 87px;
            width: 230px;
        }
        .ec-apertura{
            background-image: url("<?php echo base_url('assets/imagenes/FondoPrincipal.jpg')?>");
        }
    </style>
</head>
<body style="background: #eee;">
    <div class="container ec-apertura"><br/>
        <img class="imgPublicidad" src="<?php echo base_url('assets/imagenes/publicidadBanner.png')?>">
    </div>
    <div class="container ec-apertura">
        <br/>
        <div class="row">
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#myModal">Ingresa</button>
                <button type="button" class="btn btn-default btn-sm">Registrate</button>
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
                        </div><br/><br>
                        <div class="vg-social pull-right">
                            <a class="btn azm-social azm-size-48 azm-r-square azm-rss" href="#">
                                <i class="fa fa-rss"></i>
                            </a>
                            <a class="btn azm-social azm-size-48 azm-r-square azm-facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="btn azm-social azm-size-48 azm-r-square azm-twitter" href="#">
                                <i class="fa fa-twitter"></i>
                             </a>
                            <a class="btn azm-social azm-size-48 azm-r-square azm-google-plus" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn azm-social azm-size-48 azm-r-square azm-youtube-play" href="#">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </div>
    <nav class="navbar navbar-inverse ec-apertura" data-spy="affix" data-offset-top="197" style="border: 0px;margin-bottom: 0px;">
        <div class="mainWrap">
            <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
            <nav style="background: #BDBDBD;height: 40px;">
                <ul class="menu">
                    <li class="movil"><a class="styloSignoMas1" href="#"><b class="letra3">C</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">SALUD</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">INVESTIGACIÓN</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">ENTREVISTAS</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">VADEMECUM</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">CURSOS</b></a></li>
                    <li class="movil hoverli"><a href="#"><b class="letra3">RADIO</b></a></li>
                    <li class="movil"><a target="_blank" class="colorplay" href="<?= site_url('videos/index') ?>"><b class="letra4">PLAY</b></a></li>
                    <li class="movil"><a class="styloSignoMas" href="#"><b class="letra4">+</b></a></li>
                </ul>
            </nav>
        </div>
    </nav>
    <div class="container ec-apertura">
        <div class="row elecciones-flujos4">
            <div class="col-lg-1">
                <h2 class="tipoletrasub text-center"><b>DESTACADOS</b></h2>
            </div>
            <div class="col-lg-11">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
<!--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>-->
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h2 class="tipoletrasub text-center"><b>RUSIA 2018</b></h2>
                        </div>
                        <div class="item">
                            <h2 class="tipoletrasub text-center"><b>PPK</b></h2>
                        </div>
                        <div class="item">
                            <h2 class="tipoletrasub text-center"><b>FRAC</b></h2>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" style="font-size: 20px;top: 10px;" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" style="font-size: 20px;top: 10px;" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
        <br>
        <div class="row elecciones-flujos3">
            <div class="col-lg-12">
                <div class="ec-click1">
                    <h3 class="letraclip">Click!</h3>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
<!--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>-->
                    </ol>
                    <div class="carousel-inner ec-clickcolor" role="listbox">
                        <div class="item active">
                            <img src="<?php echo base_url('assets/imagenes/slaideruno.jpg')?>" alt="Chania" width="460" height="345">
                            <h2 class="slaiderletra text-center">PPK y sus ministros en sesión de gimnasia con Vania Masías</h2>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/imagenes/eslaiderdos.jpg')?>" alt="Flower" width="460" height="345">
                            <h2 class="slaiderletra text-center">Ruta por algunos de los pueblos y ciudades más bellos de Italia</h2>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/imagenes/eslaidertres.jpg')?>" alt="Flower" width="460" height="345">
                            <h2 class="slaiderletra text-center">Ex Combate Ximena Hoyos luce orgullosa su nuevo físico</h2>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
                <br/>
            </div>
        </div>
        <br/>
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
    <div class="container fondomostaza ec-apertura">
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
    
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Titulo</h4>
                </div>
                <div class="modal-body">
                    <p>Esto es una prueba.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>