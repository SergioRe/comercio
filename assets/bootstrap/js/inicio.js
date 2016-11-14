//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
var table;

function registrarme(){
    $("#myModalRegistro").modal("show");
}

function registrar_usuario(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/inicio/json/add';
    var email = $('#CorreoUsu').val();
    var pass = $('#PassUsu').val();
    var SuscribirmeUsu = $('#SuscribirmeUsu').val();
    var NomCompUsu = $('#NomCompUsu').val();
    var ApellidosUsu = $('#ApellidosUsu').val();
    var DniUsu = $('#DniUsu').val();
    var valor = $('input:checkbox[name=SuscribirmeUsu]:checked').val();
    if(NomCompUsu === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar sus Nombres.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    if(ApellidosUsu === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar sus Apellidos.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    if(DniUsu === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar su DNI.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    if(email === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar su correo.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    if(pass === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar su contraseña.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    var valor = validarCorreo(email);
    if(valor == 'No'){
    	return false;
    }
    $.ajax({
        url: ruta,
        type: "POST",
        dataType: "JSON",
        data: $('#formusuario').serialize(),
        beforeSend:cargando2,
        success:function(result){
            Ext.getBody().unmask();
            $('#myModalRegistro').modal('hide');
            if(result.msj === 'Si'){
            	Ext.Msg.show({
				    title: 'ATENCIÓN',
				    msg: 'Proceso realizado correctamente.',
				    buttons: Ext.Msg.OK,
				    icon: Ext.Msg.INFO
				});
            	return false;
            }else{
            	Ext.Msg.show({
                    title: 'ATENCIÓN',
                    msg: 'ERROR: '+result.msj,
                    buttons: Ext.Msg.OK,
                    icon: Ext.Msg.ERROR
                });
            }
            reload_table();
        },
        timeout:40000,
        error: problemas2
    });
    return false;
}

function recuperar_pass(){
    $('#myModal').modal('hide');
    $("#myModalRecuperarPass").modal("show");
}

function myModalRegistro(){
    $('#myModal').modal('hide');
    $("#myModalRegistro").modal("show");
}

function enviar_pass(){
    var url = base_url + '/' + pathArray[1] + '/index.php/inicio/json/recuperarpass';
    var CorreoUsu = $('#inputEmail1').val();
    if(CorreoUsu === ''){
            Ext.Msg.show({
                title: 'ATENCIÓN',
                msg: 'Debe ingresar su Correo Electrónico.',
                buttons: Ext.Msg.OK,
                icon: Ext.Msg.INFO
            });
            return false;
    }
    $.ajax({
        url: url,
        type: "POST",
		dataType: "JSON",
        data: {CorreoUsu:CorreoUsu},
        beforeSend:cargando2,
        success:function(result){
            Ext.getBody().unmask();
            $('#myModalRecuperarPass').modal('hide');
            switch(result.msj){
                case 'Si':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'Proceso realizado correctamente.',
                        buttons: Ext.Msg.OK,
                        icon: Ext.Msg.INFO
                    });
                    break;
                case 'correoNoExiste':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'El correo ingresado no existe, por favor registrese.',
                        buttons: Ext.Msg.OK,
                        icon: Ext.Msg.INFO
                    });
                    break;
                default:
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'ERROR: '+result.msj,
                        buttons: Ext.Msg.OK,
                        icon: Ext.Msg.ERROR
                    });
                    break;        
            }
        },
        timeout:40000,
        error: problemas3
    });
    return false;
}