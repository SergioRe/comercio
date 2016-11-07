<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Banner Publicidad</h4>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" class="formulario form-signin">
                	<?php
                	foreach ($banner as $value) {
                	?>
                	<div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Código: </label>
                        <div class="col-lg-7">
                            <input type="text" readonly="" class="form-control" id="IdBanner" name="IdBanner" value="<?php echo $value['IdBanner'];?>"/>
                        </div>
                    </div><br/><br/><br/>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Imagen: </label>
                        <div class="col-lg-7">
                            <img class="imgPublicidad" style="height:60px;" src="<?php echo base_url('assets/imagenes/'.$value['NomBanner'])?>" ><br/><br/>
                            <input name="archivo" type="file" id="archivo" />
                            <br/><br/>
                        </div>
                    </div><br/><br/><br/><br/>
                    <div class="form-group">
                        <label for="ejemplo_email_3" class="col-lg-4 control-label">Estado: </label>
                        <div class="col-lg-7">
                            <select id="EstadoBanner" name="EstadoBanner" class="form-control">
                                <option value="">Seleecione</option>
                                <option value="A" <?php echo (($value['EstadoBanner'] == 'A')?'selected':'');?>>Activo</option>
                                <option value="I" <?php echo (($value['EstadoBanner'] == 'I')?'selected':'');?>>Inactivo</option>
                            </select>
                        </div>
                    </div>
                	<?php
                	}
                	?>
                    <br/><br/><br/><br/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="actualizar_banner();" class="btn btn-sm btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>