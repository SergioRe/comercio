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

<div id="myModalSuscribirme" class="modal fade bd-example-modal-sm" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <span class="textoaliniado">Ingresa tu correo electrónico con el que te registrastes.</span>
            </div>
            <div class="modal-body">
                <form method="post" class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="correoelect" name="correoelect" class="form-control" placeholder="Correo Electrínico" maxlength="40" /><br/>
                    <input class="btn btn-sm btn-warning btn-block btn-signin" onclick="suscribirmeupdate();" type="button" value="ENVIAR"/><br/>
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