<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>::: Inicio</title>
    
    <?php require_once(APPPATH."views/menu/stilosscript_view.php"); ?>
</head>
<body style="background: #eee;">
    <?php require_once(APPPATH."views/menu/principalinicio_view.php"); ?>
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
        <br/>
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
    <?php require_once(APPPATH."views/menu/footer_view.php"); ?>
    </body>
</html>