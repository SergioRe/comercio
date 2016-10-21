//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );

function validar(){

    var pass = $('#inputPassword').val();
    var email = $('#inputEmail').val();
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test($('#inputEmail').val().trim())) {
        alertas('WARNING','Atención','Debe ingresar su correo correctamente.');
        return false;
    }
    if(pass === ''){
        alertas('WARNING','Atención','Debe ingresar su contraseña correctamente.');
        return false;
    }
    var numeroCaracteres = pass.length;
    if(numeroCaracteres < 7){
        alertas('WARNING','Atención','La contraseña debe tener mas de 6 letras.');
        return false; 
    }
}

function alertas(TipoAlerta,Titulo,Mensaje){
    switch (TipoAlerta){
        case 'INFO':
            TipoAlerta = BootstrapDialog.TYPE_INFO;
            break;
        case 'PRYMARY':
            TipoAlerta = BootstrapDialog.TYPE_PRIMARY;
            break;
        case 'SUCCESS':
            TipoAlerta = BootstrapDialog.TYPE_SUCCESS;
            break;
        case 'WARNING':
            TipoAlerta = BootstrapDialog.TYPE_WARNING;
            break;
        case 'DANGER':
            TipoAlerta = BootstrapDialog.TYPE_DANGER;
            break;
        default :
            TipoAlerta = BootstrapDialog.TYPE_DEFAULT;
            break;
    }      
    BootstrapDialog.show({
        title: '<b>'+Titulo+'</b>',
        type: TipoAlerta,
        message: '<div style="text-align: justify;">'+Mensaje+'</div>',
        cssClass: 'alerta-dialog',
        buttons: [{
            id: 'btn-ok',   
            icon: 'glyphicon glyphicon-check',       
            label: 'OK',
            cssClass: 'btn-primary btn-sm', 
            autospin: false,
            action: function(dialogRef){    
                dialogRef.close();
            }
        }]
    });
}

function cargando(){
    var url = base_url + '/' + pathArray[1] + "/assets/imagenes/cargando.gif";
    alertas('PRYMARY','PROCESANDO','<img src='+url+'>');
//    Ext.getBody().mask("Procesando...");
}

function problemas(){
    alertas('DANGER','ATENCIÓN','Problemas en el servidor.Presione F5 para refrescar la página.');
//    Ext.getBody().unmask();
    $('#myModal').remove();
//    Ext.getBody().mask("Presione F5 para refrescar la página.");
}

function login(email,pass){
    var url = base_url + '/' + pathArray[1] + '/index.php/inicio/login';
    $.ajax({
        url : url,
        type: "POST",
        data: {email:email,pass:pass},
        dataType: "JSON",
        beforeSend:cargando,
        success: function(data){
            Ext.getBody().unmask();
            if(data.msj === 'N'){
                alertas('DANGER','ATENCIÓN','Usuario o contraseña incorrecta.');
                return false;
            }
        },
        timeout:40000,
        error: problemas
    });
}