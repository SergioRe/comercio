<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="<?php echo base_url('assets/ext-4.2.0/resources/css/ext-all.css')?>" type="text/css" media="screen">

    <script src="<?php echo base_url('assets/ext-4.2.0/ext-all.js')?>" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/menu.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/funciones.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/inicio.js')?>" type="text/javascript"></script>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-social.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
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
<script type='text/javascript'>
$(document).ready(function() {
    var alerta = '<?php echo $alerta; ?>';
    if(alerta === 'N'){
        $("#myModal").modal("show");
        alertas('DANGER','ATENCIÓN','El usuario o contraseña incorrecta.');
        return false;
    }
});
</script>
    <div class="container ec-apertura"><br/>
        <?php
        foreach ($banner as $value) {
        $imagenurl = base_url('assets/imagenes/'.$value['NomBanner']);
        ?>
            <img class="imgPublicidad" src="<?php echo $imagenurl;?>" >
        <?php  
        }
        ?>
    </div>
    <div class="container ec-apertura">
        <br/>
        <div class="row">
            <div class="col-lg-4 text-left" id="logeo">
                <?php
                if($login == 'No'){
                ?>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Ingresa</button>
                    <button type="button" class="btn btn-default btn-sm" onclick="registrarme();">Registrate</button>
                    <button type="button" class="btn btn-default btn-sm">Suscríbete</button>
                <?php    
                }else if($login == 'Si'){
                ?>
                    <span class="pid-user-caption">&nbsp;Bienvenido(a),</span>
                    <a class="peruid-link" href="#"><?php echo $NomCompUsu;?></a>&nbsp;
                    <a href="<?= site_url('inicio/cerrarsession') ?>"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                    <button type="button" class="btn btn-default btn-sm">Suscríbete</button>
                <?php
                }
                ?>
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
            <nav class="colormenu">
                <ul class="menu">
                    <li class="movil"><a class="styloSignoMas1" href="#"><b class="letra3">C</b></a></li>
                    <?php
                    foreach ($menu as $value) {
                    ?>
                    <li class="movil hoverli"><a target="_blank" href="<?= site_url($value['UrlMenu']) ?>"><b class="letra3"><?php echo $value['NomMenu']; ?></b></a></li>
                    <?php
                    }
                    ?>
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
            <?php
            foreach ($videos as $value) {
            ?>
                <div class="thumbnail f-elecciones">
                    <img src="<?php echo base_url('assets/imagenes/'.$value['ImagenVideo'])?>" alt="imagen" style="position: relative;height:100px;">
                    <a href="#" class="btn btn-sm botonencimaimg"><?php echo $value['NomMenu'];?></a>
                    </a>
                    <div class="caption">
                        <p>
                            <a href="#" class="coloreleciones">
                                <b><?php echo $value['TituloVideo'];?></b>
                            </a>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="container ec-apertura">
        <div class="row elecciones-flujos2">
            <!--div class="row elecciones-flujos2">
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
                            </div>
                        </li>
                    </ul>
                </div>
            </div-->
        <div class="row"  style="margin-left: -25px;margin-right:-25px;">
            <div class="col-lg-12">
                <ul class="media-list main-list item_noticiax2">
                    <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" style='width:450px;height:350px;' src="<?php echo base_url('assets/imagenes/'.$destacado[0]['ImagenVideo'])?>" alt="imagen">
                        <a href="#" class="btn btn-sm botonencimaimgcero"><?php echo $destacado[0]['NomMenu'];?></a>
                    </a>
                    <div class="media-body">
                        <h2 class="media-heading colorblancoletra"><?php echo $destacado[0]['TituloVideo'];?></h2>
                        <h4 class='colorblanco1'><?php echo $destacado[0]['DescriocionVideo'];?></h4>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-left: -10px;">
            <div class="col-lg-4">
                <div class="row">
                    <div style="height: 356px;width:100%;" class="videograndecolor">
                        <div class="thumbnail" style="height: 357px;">
                            <div class="caption videograndecolor" style="height: 168px;">
                                <h3 class="coloreleciones1"><?php echo $destacado[1]['TituloVideo'];?></h3>
                                    <p class="colordescropcion"><?php echo $destacado[1]['DescriocionVideo'];?></p>
                            </div>
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[1]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                            <a href="#" class="btn btn-sm botonencimaimguno"><?php echo $destacado[1]['NomMenu'];?></a>
                        </div>
                    </div>
                </div><br/>
                <div class="row">
                    <div style="height: 170px;" class="videograndecolor">
                        <div class="thumbnail" style="height: 170px;">
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[2]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 170px;">
                            <a href="#" class="btn btn-sm botonencimaimgdos"><?php echo $destacado[2]['NomMenu'];?></a>
                        </div>
                    </div>
                </div><br/>
                <div class="row">
                    <div style="height: 356px;width:100%;" class="videograndecolor">
                        <div class="thumbnail" style="height: 357px;">
                            <div class="caption videograndecolor" style="height: 168px;">
                                <h3 class="coloreleciones1"><?php echo $destacado[3]['TituloVideo'];?></h3>
                                    <p class="colordescropcion"><?php echo $destacado[3]['DescriocionVideo'];?></p>
                            </div>
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[3]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                            <a href="#" class="btn btn-sm botonencimaimgtres"><?php echo $destacado[3]['NomMenu'];?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4" style="height: 356px;">
                        <div style="height: 170px;" class="videograndecolor">
                            <div class="thumbnail" style="height: 170px;">
                                <div class="caption videograndecolor" style="height: 74px;">
                                    <h3 class="coloreleciones2"><?php echo $destacado[4]['TituloVideo'];?></h3>
                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                           Aliquam porttitor mauris sit amet orci.</p-->
                                </div>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[4]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[4]['NomMenu'];?></a>
                            </div>
                        </div><br/>
                        <div style="height: 170px;" class="videograndecolor">
                            <div class="thumbnail" style="height: 170px;">
                                <div class="caption videograndecolor" style="height: 74px;">
                                    <h3 class="coloreleciones2"><?php echo $destacado[5]['TituloVideo'];?></h3>
                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                           Aliquam porttitor mauris sit amet orci.</p-->
                                </div>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[5]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[5]['NomMenu'];?></a>
                            </div>
                        </div><br/>
                        <div style="height: 170px;" class="videograndecolor">
                            <div class="thumbnail" style="height: 170px;">
                                <div class="caption videograndecolor" style="height: 74px;">
                                    <h3 class="coloreleciones2"><?php echo $destacado[6]['TituloVideo'];?></h3>
                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                           Aliquam porttitor mauris sit amet orci.</p-->
                                </div>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[6]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[6]['NomMenu'];?></a>
                            </div>
                        </div><br/>
                        <div style="height: 170px;" class="videograndecolor">
                            <div class="thumbnail" style="height: 170px;">
                                <div class="caption videograndecolor" style="height: 74px;">
                                    <h3 class="coloreleciones2"><?php echo $destacado[7]['TituloVideo'];?></h3>
                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                           Aliquam porttitor mauris sit amet orci.</p-->
                                </div>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[7]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[7]['NomMenu'];?></a>
                            </div>
                        </div><br/>
                        <div style="height: 170px;" class="videograndecolor">
                            <div class="thumbnail" style="height: 170px;">
                                <div class="caption videograndecolor" style="height: 74px;">
                                    <h3 class="coloreleciones2"><?php echo $destacado[8]['TituloVideo'];?></h3>
                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                           Aliquam porttitor mauris sit amet orci.</p-->
                                </div>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[8]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[8]['NomMenu'];?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" style="height: 170px;">
                        <div class="row" style="height: 170px;">
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[9]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[9]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[9]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[10]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[10]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[10]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-12">
                                <div style="height: 356px;width:100%;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 357px;">
                                        <div class="caption videograndecolor" style="height: 168px;">
                                            <h3 class="coloreleciones1"><?php echo $destacado[11]['TituloVideo'];?></h3>
                                                <p class="colordescropcion"><?php echo $destacado[11]['DescriocionVideo'];?></p>
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[11]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                                        <a href="#" class="btn btn-sm botonencimaimgtres"><?php echo $destacado[11]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row" style="height: 170px;">
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[12]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[12]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[12]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[13]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[13]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[13]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row" style="height: 170px;">
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[14]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[14]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[14]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="height: 170px;">
                                <div style="height: 170px;" class="videograndecolor">
                                    <div class="thumbnail" style="height: 170px;">
                                        <div class="caption videograndecolor" style="height: 74px;">
                                            <h3 class="coloreleciones2"><?php echo $destacado[15]['TituloVideo'];?></h3>
                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
                                                   Aliquam porttitor mauris sit amet orci.</p-->
                                        </div>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[15]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $destacado[15]['NomMenu'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        </div>
    </div>
    <div class="container fondoblanco">
        <div class="row">
            <div class="col-lg-4"><br/>
                <h3 class='pull-left' style='font: 17px/17px "preloblack";font-weight: bold;color: #4d4d4d; margin: 0 0 10px;text-transform: uppercase;'>Último minuto</h3>
                <br/><br/><div class='pull-left' style="font:consolas;font-size:11px; background-color:#eee; padding:1em;width:100%;border:0px;"></div><br/><br/>
                <div style="height:1000px;overflow-x: hidden;">
                <?php foreach ($videostodos as $valor): ?>
                <table style="width: 100%;">
                    <tr>
                        <td style="border-top: 1px solid #ccc8ba;border-right: 1px solid #ccc8ba;width: 50%;text-align: left;"><?php echo $valor['HoraVideo'];?></td>
                        <td style="border-top: 1px solid #ccc8ba;width: 50%;">&nbsp;<?php echo $valor['NomMenu'];?></td>
                    </tr>
                </table>
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: justify;width: 100%;font-weight: bold;"><?php echo $valor['TituloVideo'];?></td>
                    </tr>
                </table>
                <table style="width: 100%;">
                    <tr>
                        <td><img src="<?php echo base_url('assets/imagenes/'.$valor['ImagenVideo'])?>" alt="imagen" style="width: 95%;height: 100px;"></td>
                        <td style="text-align: justify;width: 50%;"><?php echo $valor['DescriocionVideo'];?></td>
                    </tr>
                </table><br/>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4">d</div>
            <div class="col-lg-4">d</div>
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
                    <h4 class="modal-title">Comercio</h4>
                    <span class="textoaliniado">Inicia sesión y podrás interactuar con nuestro portal, participar de nuestras 
                        promociones y sorteos.</span>
                </div>
                <div class="modal-body">
                    <form method="post" class="form-signin" action="" onsubmit="return validar()">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Correo Electronico" maxlength="40" /><br/>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" maxlength="10" /><br/>
                        <input class="btn btn-sm btn-primary btn-block btn-signin" type="submit" value="INICIAR SESÍON"/><br/>
                        <!--<button class="btn btn-sm btn-primary btn-block btn-signin" type="submit">INICIAR SESÍON</button><br/>-->
                        <a href="#" onclick="recuperar_pass();" class="text-center">Olvidé mi contraseña</a><span class="clearfix"></span><br/>
                        <label class="pull-left">
                            ¿Aún no tienes una cuenta?
                        </label>
                        <a href="#" onclick="myModalRegistro();" class="pull-right btn btn-sm btn-warning">Regístrate</a><span class="clearfix"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="myModalRecuperarPass" class="modal fade bd-example-modal-sm" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Restablece tu contraseña</h4>
                    <span class="textoaliniado">Ingresa el correo electrónico con el que te registraste.</span>
                </div>
                <div class="modal-body">
                    <form method="post" class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail1" name="inputEmail1" class="form-control" placeholder="Correo Electrínico" maxlength="40" /><br/>
                        <input class="btn btn-sm btn-warning btn-block btn-signin" onclick="enviar_pass();" type="button" value="ENVIAR"/><br/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModalRegistro" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sé parte de nuestra comunidad y podrás interactuar con nuestro portal, participar de nuestras promociones y sorteos.</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="formusuario" name="formusuario">
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Nombres: </label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="NomCompUsu" maxlength='50' name="NomCompUsu" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Apellidos: </label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="ApellidosUsu" maxlength='50' name="ApellidosUsu" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">DNI: </label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" maxlength='8' id="DniUsu" name="DniUsu" onkeypress="return validarNumeros(event)" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Correo: </label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" maxlength='40' id="CorreoUsu" name="CorreoUsu" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Contraseña: </label>
                            <div class="col-lg-7">
                                <input type="password" class="form-control" maxlength='10' id="PassUsu" name="PassUsu" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox" id="SuscribirmeUsu" name="SuscribirmeUsu" />Deseo suscribirme al newsletter</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" onclick="registrar_usuario();" class="btn btn-sm btn-warning">Registrarme</button>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>