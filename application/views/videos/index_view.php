<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videos</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/estilos.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-social.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/docs.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/docs.js')?>"></script>
    </head> 
    <body>
        <style type="text/css">
            .fondovideos{
                background: rgba(0, 0, 0, 0) url("<?php echo base_url('assets/imagenes/bg-principal.jpg')?>") no-repeat scroll 0 0;
                margin: 0 auto;
                padding-top: 20px;
                width:100%;
                max-width:1300px;
                /*padding: 20px 60px 30px;*/
            }
            .logo a{
                background-image: url("<?php echo base_url('assets/imagenes/logoplay.png')?>");
                display: block;
                float: left;
                height: 68px;
                text-indent: -9999px;
            }
            @media (min-width: 600px) {
                .row {
                    margin-left: 20px;
                    margin-right: 20px;
                }
            }
            .letravideofondo{
                background: rgba(0, 0, 0, 0) url("<?php echo base_url('assets/imagenes/bg-bignota.png')?>") repeat scroll center top;
                bottom: 5px;
                padding: 20px;
                position: absolute;
                width: 876px;
            }
            .textsmall {
                color: #ffc605;
                display: block;
                font: 14px "Arial";
                margin-bottom: 10px;
            }
        </style>
        <div class="container fondovideos">
            <div class="row">
                <div class="col-lg-6">
                    <div class="logo">
                        <h1>
                            <a class="go-ec" href="#">Elcomercio.pe</a>
                            <a class="go-videos" href="#">Videos</a>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="vg-opts">
                        <span class="fecha"><?php echo $fecha;?></span>
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
                        <div class="vg-search">
                            <form method="get" action="#">
                                <input type="text" name="txtSearch" placeholder="Buscar">
                                <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"><br/>
                <div class="col-lg-9">
                    <?php
                    if(isset($topOchoVideos[0])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[0]['ImagenVideo'];
                    ?>
                    <iframe class="youtube-player" type="text/html" style="width: 876px;height: 489px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <div class="letravideofondo">
                        <span class="textsmall"><a style="color: #ffc605; text-decoration: none;" href="mundo"><?php echo $topOchoVideos[0]['NomMenu'];?></a> | </span>
                        <h2 class="pull-left"><a style="color: #fff;text-decoration: none;" href="#"><?php echo $topOchoVideos[0]['TituloVideo'];?></a></h2>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if(isset($topOchoVideos[1])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[1]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;top:5px;"><h6><?php echo $topOchoVideos[1]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[1]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                    <br/><br/>
                    <?php
                    if(isset($topOchoVideos[2])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[2]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;"><h6><?php echo $topOchoVideos[2]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[2]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row"><br/>
                <div class="col-lg-3">
                    <?php
                    if(isset($topOchoVideos[3])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[3]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;"><h6><?php echo $topOchoVideos[3]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[3]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if(isset($topOchoVideos[4])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[4]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;"><h6><?php echo $topOchoVideos[4]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[4]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if(isset($topOchoVideos[5])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[5]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;"><h6><?php echo $topOchoVideos[5]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[5]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if(isset($topOchoVideos[6])){
                    $url = "http://www.youtube.com/embed/".$topOchoVideos[6]['ImagenVideo'];
                    ?>
                    <span style="text-align: justify;width: 50%;color: #FFF;"><h6><?php echo $topOchoVideos[6]['NomMenu'];?></h6></span>
                    <iframe class="youtube-player" type="text/html" style="width: 275px;height: 153px;" 
                            src="<?php echo $url;?>?rel=0&showinfo=0&controls=1&autoplay=0&start=120" allowfullscreen frameborder=”0″ allowfullscreen>
                    </iframe>
                    <span style="text-align: justify;width: 50%;font-weight: bold;color: #FFF;"><h4><?php echo $topOchoVideos[6]['TituloVideo'];?></h4></span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <br><br><br><br>
        </div>
    <script type="text/javascript">
    $(document).ready(function() {

    });
    </script>
    </body>
</html>