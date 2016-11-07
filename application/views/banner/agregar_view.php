<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Banner Publicidad</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" class="formulario form-signin">
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Imagen: </label>
                        <div class="col-lg-7">
                            <input name="archivo" type="file" id="archivo" />
                        </div>
                    </div><br/><br/>
                    <!--div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Estado: </label>
                        <div class="col-lg-7">
                            <select id="EstadoBanner" name="EstadoBanner" class="form-control">
                                <option value="">Seleecione</option>
                                <option value="A">Activo</option>
                                <option value="I">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <br/-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="agregar_banner();" class="btn btn-sm btn-warning">Agregar</button>
            </div>
        </div>
    </div>
</div>