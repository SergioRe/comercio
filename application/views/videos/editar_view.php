<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Video</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" class="form-horizontal formulario" role="form">
                	<?php
                	foreach ($videos as $value) {
                	?>
                	<div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Código: </label>
                        <div class="col-lg-7">
                            <input type="text" readonly="" class="form-control" id="IdVideo" name="IdVideo" value="<?php echo $value['IdVideo'];?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Nom. Menú: </label>
                        <div class="col-lg-7">
                            <select id="IdMenu" name="IdMenu" class="form-control">
                                <option value="">Seleecione</option>
                                <?php
                                foreach ($menu as $value1) {
                                ?>
                                	<option value="<?php echo $value1['IdMenu'];?>" <?php echo (($value1['IdMenu'] == $value['IdMenu'])?'selected':'');?>><?php echo $value1['NomMenu'];?></option>
                                <?php
                                }
                                ?>
                             </select>
                        </div>
                    </div>
                    <div class="form-group">
			             <label for="ejemplo_email_3" class="col-lg-4 control-label">Título del Vídeo: </label>
			             <div class="col-lg-7">
                            <textarea class="form-control" rows="2" id="TituloVideo" maxlength="300" name="TituloVideo"><?php echo $value['TituloVideo'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
			             <label for="ejemplo_email_3" class="col-lg-4 control-label">Descripcion del Vídeo: </label>
			             <div class="col-lg-7">
                            <textarea class="form-control" rows="3" id="DescriocionVideo" maxlength="300" name="DescriocionVideo"><?php echo $value['DescriocionVideo'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Imagen Video: </label>
                        <div class="col-lg-7">
                            <img class="imgPublicidad" style="height:60px;" src="<?php echo base_url('assets/imagenes/'.$value['ImagenVideo'])?>" ><br/><br/>
                            <input name="archivo" type="file" id="archivo" />
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="ejemplo_email_3" class="col-lg-4 control-label">Palabra Destacado: </label>
                         <div class="col-lg-7">
                            <input type="text" class="form-control" maxlength="30" id="PalabraVideo" name="PalabraVideo" value="<?php echo $value['PalabraVideo'];?>" />
                        </div>
                    </div>
                    <input type="hidden" name="destacado" id="destacado" value='N' />
                    <!--div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Destacado: </label>
                        <div class="col-lg-7">
                            <select id="destacado" name="destacado" class="form-control">
                                <option value="">Seleecione</option>
                                <option value="S" <?php echo (($value['destacado'] == 'S')?'selected':'');?>>Si</option>
                                <option value="N" <?php echo (($value['destacado'] == 'N')?'selected':'');?>>No</option>
                            </select>
                        </div>
                    </div-->
                	<?php
                	}
                	?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="actualizar_video();" class="btn btn-sm btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>