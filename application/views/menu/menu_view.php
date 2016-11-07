<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url('admin/index')?>">Principal</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Mantenimeinto<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('banner/index') ?>">Banner Publicidad</a></li>
                            <li><a href="<?= site_url('usuarios/index') ?>">Usuarios</a></li>
                            <li><a href="<?= site_url('menu/index') ?>">Menu</a></li>
                            <li><a href="<?= site_url('videos/listar') ?>">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Reportes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $NomCompUsu;?></a></li>
                    <li><a href="<?= site_url('inicio/cerrarsession') ?>"><span class="glyphicon glyphicon-log-in"></span> Cerra Sessión</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>