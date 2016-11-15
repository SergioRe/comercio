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
	            <li class="movil"><a class="styloSignoMas1" href="<?= site_url('inicio/index') ?>"><b class="letra3">C</b></a></li>
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
                        <h2 class="tipoletrasub text-center">
                            <?php 
                                echo '<a href="#" class="tipoletrasub"><b>•'.$videospalabra[0]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[1]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[2]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[3]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[4]['PalabraVideo'].'</b></a>';
                            ?>
                        </h2>
                    </div>
                    <div class="item">
                        <h2 class="tipoletrasub text-center">
                            <?php 
                                echo '<a href="#" class="tipoletrasub"><b>•'.$videospalabra[5]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[6]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[7]['PalabraVideo'].'</b></a>';
                                if($videospalabrafiltro == 'Todos'){
                                    echo '<a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[8]['PalabraVideo'].'</b></a>
                                    <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[9]['PalabraVideo'].'</b></a>';
                                }
                            ?>
                        </h2>
                    </div>
                    <?php
                    if($videospalabrafiltro == 'Todos'){
                    ?>
                    <div class="item">
                        <h2 class="tipoletrasub text-center">
                            <?php 
                                echo '<a href="#" class="tipoletrasub"><b>•'.$videospalabra[10]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[11]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[12]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[13]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[14]['PalabraVideo'].'</b></a>
                                <a href="#" class="tipoletrasub" style="margin-left:20px;"><b>•'.$videospalabra[15]['PalabraVideo'].'</b></a>';
                            ?>
                        </h2>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style='width:7%;'>
                    <span class="glyphicon glyphicon-chevron-left" style="font-size: 20px;top: 10px;" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style='width:7%;'>
                    <span class="glyphicon glyphicon-chevron-right" style="font-size: 20px;top: 10px;" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</div>