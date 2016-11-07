<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Menu</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" class="formulario form-horizontal" id="formusuario" name="formusuario">
                	<?php
                	foreach ($menu as $value) {
                	?>
                	<div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Código: </label>
                            <div class="col-lg-7">
                                <input type="text" readonly="" class="form-control" id="IdMenu" name="IdMenu" value="<?php echo $value['IdMenu'];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-4 control-label">Nombre: </label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" maxlength="30" id="NomMenu" name="NomMenu" value="<?php echo $value['NomMenu'];?>"/>
                            </div>
                        </div>
                	<?php
                	}
                	?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="actualizar_menu();" class="btn btn-sm btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>