<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Usuario</h4>
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
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Tipo Usuario: </label>
                        <div class="col-lg-7">
                            <select id="TipoUsu" name="TipoUsu" class="form-control">
                                <option value="">Seleecione</option>
                                <option value="A">Administrador</option>
                                <option value="I">Inactivo</option>
                                <option value="I">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="agregar_usuario();" class="btn btn-sm btn-success">Grabar</button>
            </div>
        </div>
    </div>
</div>