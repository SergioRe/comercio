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

function validarNumeros(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function validarCorreo(email){
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test(email.trim())) {
        alertas('WARNING','Atención','Debe ingresar su correo correctamente.');
        return 'No';
    }else{
        return 'Si';
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
}

function cargando1(){
    Ext.getBody().mask("Cargando...");
}

function cargando2(){
    Ext.getBody().mask("Procesando...");
}

function problemas1(){
    $('#myModal').modal('hide');
    Ext.getBody().mask("Problemas en el servidor.Presione F5 para refrescar la página.");
}

function problemas2(){
    $('#myModalRegistro').modal('hide');
    Ext.getBody().mask("Problemas en el servidor.Presione F5 para refrescar la página.");
}

function problemas3(){
    $('#myModalRecuperarPass').modal('hide');
    Ext.getBody().mask("Problemas en el servidor.Presione F5 para refrescar la página.");
}

function problemas(){
    alertas('DANGER','ATENCIÓN','Problemas en el servidor.Presione F5 para refrescar la página.');
//    Ext.getBody().unmask();
    $('#myModal').remove();
//    Ext.getBody().mask("Presione F5 para refrescar la página.");
}

/*function login(email,pass){
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

//EXT JS
Ext.Msg.show({
    //title: 'Dude',
    //msg: 'Dude, you need to select at least one link.',
    //buttons: Ext.Msg.OK,
    //icon: Ext.Msg.WARNING
//});

Ext.MessageBox.confirm('Confirm', 'Are you sure you want to do that?', '' );

var myCallback = function(btn, text) {
        console.info('You pressed ' + btn);
        if (text) {
            console.info('You entered '+ text);
        }
    }
Ext.MessageBox.show({

        title : 'Be Careful!',
        msg : 'Are you sure?',
        width : 300,
        buttons : Ext.MessageBox.YESNOCANCEL,
        fn : myCallback,
        icon : Ext.MessageBox.QUESTION
    });

Ext.Msg.alert('Status', 'Changes saved successfully.');

Ext.Msg.prompt('Name', 'Please enter your name:', function(btn, text){
    if (btn == 'ok'){
        // process text value and close...
    }
});

Ext.Msg.confirm("Confirmation", "Do you want to Save changes?", function(btnText){
        if(btnText === "no"){
            Ext.Msg.alert("Alert", "You have confirmed 'No'.");
        }
        else if(btnText === "yes"){
            Ext.Msg.alert("Alert", "You have confirmed 'Yes'.");
        }
    }, this);

Ext.Msg.prompt("Sencha Tutorial", "Please enter your Sencha Id:", function(btnText, sInput){
                if(btnText === 'ok'){
                    Ext.Msg.alert("Status", "You entered:" + sInput);
                }
            }, this);

Ext.Msg.show({
                title : 'Save',
                msg : 'Do you want to Save the changes? ',
                width : 300,
                closable : false,
                buttons : Ext.Msg.YESNOCANCEL,
                buttonText : 
                {
                    yes : 'Yes & Continue',
                    no : 'No & Continue',
                    cancel : 'Discard'
                },
                multiline : false,
                fn : function(buttonValue, inputText, showConfig){
                    Ext.Msg.alert('Status', buttonValue);
                },
                icon : Ext.Msg.QUESTION
            });



    Ext.MessageBox.INFO
    Ext.MessageBox.ERROR
    Ext.MessageBox.QUESTION
    Ext.MessageBox.WARNING

*/