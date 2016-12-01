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
			            <label for="ejemplo_email_3" class="col-lg-4 control-label">Descripcion del Vídeo: </label>
			            <div class="col-lg-7">
                            <textarea class="form-control" rows="3" id="DescriocionVideo" maxlength="300" name="DescriocionVideo"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Seleccione Imagen/Video </label>
                        <div class="col-lg-7">
                            <select id="flag" name="flag" class="form-control" onchange="seleccionarvideoimagen(this.value);">
                                <option value="">Seleecione</option>
                                <option value="I">Imagen</option>
                                <option value="V">Video</option>
                             </select>
                        </div>
                    </div>
                    <div class="form-group" id="video" style="display:none;">
                         <label for="ejemplo_email_3" class="col-lg-4 control-label">Video: </label>
                         <div class="col-lg-7">
                             <input type="text" class="form-control" maxlength="100" id="ImagenVideo" name="ImagenVideo" placeholder="Ingrese el ID del video" />
                        </div>
                    </div>
                    <div class="form-group" id="imagen" style="display:none;">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Imagen: </label>
                        <div class="col-lg-7">
                            <input name="archivo" type="file" id="archivo" />
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="ejemplo_email_3" class="col-lg-4 control-label">Palabra Destacado: </label>
                         <div class="col-lg-7">
                            <input type="text" class="form-control" maxlength="30" id="PalabraVideo" name="PalabraVideo" />
                        </div>
                    </div>
                    <input type="hidden" name="destacado" id="destacado" value='N' />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="agregar_video();" class="btn btn-sm btn-warning">Agregar</button>
            </div>
        </div>
    </div>
</div>