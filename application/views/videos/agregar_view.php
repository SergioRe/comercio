<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Video</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" class="form-horizontal formulario" role="form">
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Nom. Menú: </label>
                        <div class="col-lg-7">
                            <select id="IdMenu" name="IdMenu" class="form-control">
                                <option value="">Seleecione</option>
                                <?php
                                foreach ($menu as $value1) {
                                ?>
                                	<option value="<?php echo $value1['IdMenu'];?>"><?php echo $value1['NomMenu'];?></option>
                                <?php
                                }
                                ?>
                             </select>
                        </div>
                    </div>
                     <div class="form-group">
						 <label for="ejemplo_email_3" class="col-lg-4 control-label">Título del Vídeo: </label>
						 <div class="col-lg-7">
						 	<textarea class="form-control" rows="2" id="TituloVideo" maxlength="300" name="TituloVideo"></textarea>
                        </div>
					</div>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Imagen Video: </label>
                        <div class="col-lg-7">
                            <input name="archivo" type="file" id="archivo" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Destacado: </label>
                        <div class="col-lg-7">
                            <select id="destacado" name="destacado" class="form-control">
                                <option value="">Seleecione</option>
                                <option value="S">Si</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="agregar_video();" class="btn btn-sm btn-warning">Agregar</button>
            </div>
        </div>
    </div>
</div>