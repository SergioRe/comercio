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
/*            .col-lg-6{
                 padding-left: 60px;
                 padding-left: auto;
            }*/
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
            <br><br><br><br>
        </div>
    <script type="text/javascript">
    $(document).ready(function() {

    });
    </script>
    </body>
</html>