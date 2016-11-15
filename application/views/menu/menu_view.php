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
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimeinto <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level">
                            <li><a href="<?= site_url('banner/index') ?>">Banner Publicidad</a></li>
                            <li><a href="<?= site_url('usuarios/index') ?>">Usuarios</a></li>
                            <li><a href="<?= site_url('menu/index') ?>">Menu</a></li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('videos/listar') ?>">General</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="<?= site_url('salud/listar') ?>">Salud</a></li>
                                    <li><a href="<?= site_url('investigacion/listar') ?>">Investigacion</a></li>
                                    <li><a href="<?= site_url('entrevistas/listar') ?>">Entrevistas</a></li>
                                    <li><a href="<?= site_url('vademecum/listar') ?>">Vademecum</a></li>
                                    <li><a href="<?= site_url('cursos/listar') ?>">Cursos</a></li>
                                    <li><a href="<?= site_url('radio/listar') ?>">Radio</a></li>
                                </ul>
                            </li>
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