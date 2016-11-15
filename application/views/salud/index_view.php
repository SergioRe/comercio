<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <title>::: Salud</title>
	    
	    <?php require_once(APPPATH."views/menu/stilosscript_view.php"); ?>
	</head>
	<body style="background: #eee;">
	    <?php require_once(APPPATH."views/menu/principalinicio_view.php"); ?>
	    <div class="container ec-apertura">
	        <div class="row elecciones-flujos2">
	        	<div class="row"  style="margin-left: -25px;margin-right:-25px;">
		            <div class="col-lg-12">
		                <ul class="media-list main-list item_noticiax2">
		                    <li class="media">
		                    <a class="pull-left" href="#">
		                        <img class="media-object" style='width:450px;height:350px;' src="<?php echo base_url('assets/imagenes/'.$videospalabra[0]['ImagenVideo'])?>" alt="imagen">
		                        <a href="#" class="btn btn-sm botonencimaimgcero"><?php echo $videospalabra[0]['NomMenu'];?></a>
		                    </a>
		                    <div class="media-body">
		                        <h2 class="media-heading colorblancoletra"><?php echo $videospalabra[0]['TituloVideo'];?></h2>
		                        <h4 class='colorblanco1'><?php echo $videospalabra[0]['DescriocionVideo'];?></h4>
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
		                                <h3 class="coloreleciones1"><?php echo $videospalabra[1]['TituloVideo'];?></h3>
		                                    <p class="colordescropcion"><?php echo $videospalabra[1]['DescriocionVideo'];?></p>
		                            </div>
		                            <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[1]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 188px;" class="imagengrande">
		                            <a href="#" class="btn btn-sm botonencimaimguno"><?php echo $videospalabra[1]['NomMenu'];?></a>
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
		                                    <h3 class="coloreleciones2"><?php echo $videospalabra[2]['TituloVideo'];?></h3>
		                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                           Aliquam porttitor mauris sit amet orci.</p-->
		                                </div>
		                                <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[2]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[2]['NomMenu'];?></a>
		                            </div>
		                        </div><br/>
		                        <div style="height: 170px;" class="videograndecolor">
		                            <div class="thumbnail" style="height: 170px;">
		                                <div class="caption videograndecolor" style="height: 74px;">
		                                    <h3 class="coloreleciones2"><?php echo $videospalabra[3]['TituloVideo'];?></h3>
		                                        <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                           Aliquam porttitor mauris sit amet orci.</p-->
		                                </div>
		                                <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[3]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[3]['NomMenu'];?></a>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-8" style="height: 170px;">
		                        <div class="row" style="height: 170px;">
		                            <div class="col-lg-6" style="height: 170px;">
		                                <div style="height: 170px;" class="videograndecolor">
		                                    <div class="thumbnail" style="height: 170px;">
		                                        <div class="caption videograndecolor" style="height: 74px;">
		                                            <h3 class="coloreleciones2"><?php echo $videospalabra[4]['TituloVideo'];?></h3>
		                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                                   Aliquam porttitor mauris sit amet orci.</p-->
		                                        </div>
		                                        <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[4]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[4]['NomMenu'];?></a>
		                                    </div>
		                                </div><br/>
		                                <div style="height: 170px;" class="videograndecolor">
		                                    <div class="thumbnail" style="height: 170px;">
		                                        <div class="caption videograndecolor" style="height: 74px;">
		                                            <h3 class="coloreleciones2"><?php echo $videospalabra[5]['TituloVideo'];?></h3>
		                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                                   Aliquam porttitor mauris sit amet orci.</p-->
		                                        </div>
		                                        <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[5]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[5]['NomMenu'];?></a>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-lg-6" style="height: 170px;">
		                                <div style="height: 170px;" class="videograndecolor">
		                                    <div class="thumbnail" style="height: 170px;">
		                                        <div class="caption videograndecolor" style="height: 74px;">
		                                            <h3 class="coloreleciones2"><?php echo $videospalabra[6]['TituloVideo'];?></h3>
		                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                                   Aliquam porttitor mauris sit amet orci.</p-->
		                                        </div>
		                                        <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[6]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[6]['NomMenu'];?></a>
		                                    </div>
		                                </div><br/>
		                                <div style="height: 170px;" class="videograndecolor">
		                                    <div class="thumbnail" style="height: 170px;">
		                                        <div class="caption videograndecolor" style="height: 74px;">
		                                            <h3 class="coloreleciones2"><?php echo $videospalabra[7]['TituloVideo'];?></h3>
		                                                <!--p class="colordescropcion">Donec nec justo eget felis facilisis fermentum. 
		                                                   Aliquam porttitor mauris sit amet orci.</p-->
		                                        </div>
		                                        <img src="<?php echo base_url('assets/imagenes/'.$videospalabra[7]['ImagenVideo'])?>" alt="imagen" width="100%" style="height: 96px;">
		                                        <a href="#" class="btn btn-sm botonencimaimgcuatro"><?php echo $videospalabra[7]['NomMenu'];?></a>
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
	    <?php require_once(APPPATH."views/menu/footer_view.php"); ?>
	 </body>
 <html>