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
                    <?php
                    if($value['flag'] == 'I'){
                    ?>
                    <img src="<?php echo base_url('assets/imagenes/'.$value['ImagenVideo'])?>" alt="imagen" style="position: relative;height:100px;">
                    <?php
                    }else{
                    $url = "http://www.youtube.com/embed/".$value['ImagenVideo'];     
                    ?>
                    <iframe class="youtube-player" type="text/html" style="position: relative;height:100px;width:176px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                    <?php
                    }
                    ?>
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
        <div class="row"  style="margin-left: -25px;margin-right:-25px;">
            <div class="col-lg-12">
                <ul class="media-list main-list item_noticiax2">
                    <li class="media">
                    <a class="pull-left" href="#">
                        <?php
                        if($destacado[0]['flag'] == 'I'){
                        ?>
                        <img class="media-object" style='width:450px;height:350px;' src="<?php echo base_url('assets/imagenes/'.$destacado[0]['ImagenVideo'])?>" alt="imagen">
                        <?php
                        }else{
                        $url = "http://www.youtube.com/embed/".$destacado[0]['ImagenVideo'];     
                        ?>
                        <iframe class="youtube-player" type="text/html" style="width:450px;height:350px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                        <?php
                        }
                        ?>
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
                            <?php
                            if($destacado[1]['flag'] == 'I'){
                            ?>
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[1]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                            <?php
                            }else{
                            $url = "http://www.youtube.com/embed/".$destacado[1]['ImagenVideo'];
                            echo $url;
                            ?>
                            <iframe class="youtube-player" type="text/html" width="100%" style="height:188px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                            <?php
                            }
                            ?>
                            <a href="#" class="btn btn-sm botonencimaimguno"><?php echo $destacado[1]['NomMenu'];?></a>
                        </div>
                    </div>
                </div><br/>
                <div class="row">
                    <div style="height: 170px;" class="videograndecolor">
                        <div class="thumbnail" style="height: 170px;">
                            <?php
                            if($destacado[2]['flag'] == 'I'){
                            ?>
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[2]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 170px;">
                            <?php
                            }else{
                            $url = "http://www.youtube.com/embed/".$destacado[2]['ImagenVideo'];
                            echo $url;
                            ?>
                            <iframe class="youtube-player" type="text/html" width="100%" style="height:170px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                            <?php
                            }
                            ?>
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
                            <?php
                            if($destacado[3]['flag'] == 'I'){
                            ?>
                            <img src="<?php echo base_url('assets/imagenes/'.$destacado[3]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                            <?php
                            }else{
                            $url = "http://www.youtube.com/embed/".$destacado[3]['ImagenVideo'];
                            echo $url;
                            ?>
                            <iframe class="youtube-player" type="text/html" width="100%" style="height:188px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                            <?php
                            }
                            ?>
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
                                <?php
                                if($destacado[4]['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[4]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$destacado[4]['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
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
                                <?php
                                if($destacado[5]['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[5]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$destacado[5]['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
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
                                <?php
                                if($destacado[6]['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[6]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$destacado[6]['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
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
                                <?php
                                if($destacado[7]['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[7]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$destacado[7]['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
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
                                <?php
                                if($destacado[8]['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$destacado[8]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$destacado[8]['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
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
                                        <?php
                                        if($destacado[9]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[9]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[9]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[10]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[10]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[10]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[11]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[11]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[11]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:188px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[12]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[12]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[12]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[13]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[13]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[13]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[14]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[14]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[14]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        if($destacado[15]['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$destacado[15]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$destacado[15]['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" width="100%" style="height:96px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
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
            <div class="col-lg-9"><br/>
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class='pull-left' style='font: 17px/17px "preloblack";font-weight: bold;color: #4d4d4d; margin: 0 0 10px;text-transform: uppercase;'>Último minuto</h3>
                        <br/><br/><div class='pull-left' style="font:consolas;font-size:11px; background-color:#eee; padding:1em;width:100%;border:0px;"></div><br/><br/>
                        <div style="height:2246px;overflow-x: hidden;">
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
                                <td>
                                    <?php
                                    if($valor['flag'] == 'I'){
                                    ?>
                                    <img src="<?php echo base_url('assets/imagenes/'.$valor['ImagenVideo'])?>" alt="imagen" style="width: 95%;height: 100px;">
                                    <?php
                                    }else{
                                    $url = "http://www.youtube.com/embed/".$valor['ImagenVideo'];
                                    echo $url;
                                    ?>
                                    <iframe class="youtube-player" type="text/html" style="width: 95%;height: 100px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td style="text-align: justify;width: 50%;"><?php echo $valor['DescriocionVideo'];?></td>
                            </tr>
                        </table><br/>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div class="item active">
                                    <img src="<?php echo base_url('assets/imagenes/176x99.jpg')?>" alt="Chania" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Chania</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x999.jpg')?>" alt="Chania" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Chania</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                    </div>
                                </div>
                            
                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x99sss.jpg')?>" alt="Flower" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Flowers</h3>
                                        <p>Beatiful flowers in Kolymbari, Crete.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x99ssss.jpg')?>" alt="Flower" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Flowers</h3>
                                        <p>Beatiful flowers in Kolymbari, Crete.</p>
                                    </div>
                                </div>
                          
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:#b10101;height: 50px;top: 201px;width: 179px;">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background:#b10101;height: 50px;top: 201px;width: 179px;">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div><br/><br/><br/><br/>
                        <div class="cnt-flujos">
                            <h3 class="captionn">
                                <a href="#"><b>Salud</b></a>
                            </h3>
                            <?php
                            foreach ($saludocho as $valorsalud){ ?>
                            <table style="width: 330px;margin-left:12px;">
                                <tr>
                                    <td style="text-align: justify;width: 100%;font-weight: bold;border-top: 2px solid #a1a5a8;"><?php echo $valorsalud['PalabraVideo'];?></td>
                                </tr>
                            </table>
                            <table style='margin-right:12px;'>
                                <tr>
                                    <td>
                                        <?php
                                        if($valorsalud['flag'] == 'I'){
                                        ?>
                                        <img src="<?php echo base_url('assets/imagenes/'.$valorsalud['ImagenVideo'])?>" alt="imagen" style="width: 85%;height: 100px;">
                                        <?php
                                        }else{
                                        $url = "http://www.youtube.com/embed/".$valorsalud['ImagenVideo'];
                                        echo $url;
                                        ?>
                                        <iframe class="youtube-player" type="text/html" style="width: 85%;height: 100px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align: justify;width: 50%;font-weight: bold;"><h4><?php echo $valorsalud['TituloVideo'];?></h4></td>
                                </tr>
                            </table>
                            <br/>
                            <?php } ?>
                        </div><br/>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div class="item active">
                                    <img src="<?php echo base_url('assets/imagenes/176x99.jpg')?>" alt="Chania" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Chania</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x999.jpg')?>" alt="Chania" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Chania</h3>
                                        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                    </div>
                                </div>
                            
                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x99sss.jpg')?>" alt="Flower" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Flowers</h3>
                                        <p>Beatiful flowers in Kolymbari, Crete.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="<?php echo base_url('assets/imagenes/176x99ssss.jpg')?>" alt="Flower" width="460" height="345">
                                    <div class="carousel-caption">
                                        <h3>Flowers</h3>
                                        <p>Beatiful flowers in Kolymbari, Crete.</p>
                                    </div>
                                </div>
                          
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div><br/>
                        <img src="<?php echo base_url('assets/imagenes/propaganda1.jpg')?>" alt="Flower" width="100%" height="200">
                        <br/><br/>
                        <h3 style="background-position: 5px -108px;height:34px;background:red;width:100%;">
                            <a class="img" style="color:#ffffff;" href="#">Ruedas</a>
                        </h3>
                        <img src="<?php echo base_url('assets/imagenes/propaganda3.jpg')?>" alt="Flower" width="100%" height="200">
                        <figcaption class='figcaptiones'>
                            <h3><a href="#" >Las bellas chicas de la CCTC</a></h3>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"><br/>
                <h3 style="background-position: 5px -108px;height:34px;background:red;width:100%;">
                    <a class="img" style="color:#ffffff;" href="#">Jubílate del estres</a>
                </h3>
                <img src="<?php echo base_url('assets/imagenes/publicidad4.jpg')?>" alt="Flower" width="100%" height="200">
                <br/><br/>
                <div class="cnt-flujos">
                    <h3 class="captionn">
                        <a href="#"><b>Cursos</b></a>
                    </h3>
                    <?php foreach ($cursosocho as $valueocho): ?>
                    <table style="width: 200px;margin-left:12px;">
                        <tr>
                            <td style="text-align: justify;width: 100%;font-weight: bold;border-top: 2px solid #a1a5a8;"><?php echo $valueocho['TituloVideo'];?></td>
                        </tr>
                    </table>
                    <table style="width:200px;margin-left:12px;margin-right:12px;">
                        <tr>
                            <td>
                                <?php
                                if($valueocho['flag'] == 'I'){
                                ?>
                                <img src="<?php echo base_url('assets/imagenes/'.$valueocho['ImagenVideo'])?>" alt="imagen" style="width: 100%;height: 100px;">
                                <?php
                                }else{
                                $url = "http://www.youtube.com/embed/".$valueocho['ImagenVideo'];
                                echo $url;
                                ?>
                                <iframe class="youtube-player" type="text/html" style="width: 100%;height: 100px;" src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen></iframe>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <?php endforeach; ?>
                </div><br/>

            </div>
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