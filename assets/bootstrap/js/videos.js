//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
var table;

$(document).ready(function() {
    var url = base_url + '/' + pathArray[1] + '/index.php/videos/json/list';
    table = $('#tablevideos').DataTable({
        "pageLength": 10,
        "scrollX": true,
        //"scrollY": "245",
        "processing": true,
        "serverSide": true,
        "order": [], 
        "ajax": {
            "url": url,
            "type": "POST"
        },
        "columnDefs": [{ 
            "targets": [ 0,1,2,3,4,5,6 ],
            "orderable": false
        }],
        "bLengthChange" : false,
        "language": {
            "sSearch": "Buscar: ",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando paginas _PAGE_ de _PAGES_, total de filas _MAX_.",
            "infoEmpty": "Ning&uacute;n dato disponible en esta tabla",
            "infoFiltered": "(filtrando _MAX_ filas en total)",
            "sProcessing":   "Procesando...",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "&Uacute;ltimo",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            }
        }
    });
});

function edit_video(IdVideo){
    var url = base_url + '/' + pathArray[1] + '/index.php/videos/editar';
    $.ajax({
        url : url,
        type: "POST",
        data: {IdVideo:IdVideo},
        beforeSend:cargando1,
        success: function(result){
            Ext.getBody().unmask();
            $('#resultado').html(result);
            $("#myModal").modal("show");
        },
        timeout:40000,
        error: problemas
    });
}

function reload_table(){
    table.ajax.reload(null,false);
}

function actualizar_video(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/videos/json/update';
    var formImg = new FormData($(".formulario")[0]);
    var IdMenu = $('#IdMenu').val();
    var TituloVideo = $('#TituloVideo').val();
    var destacado = $('#destacado').val();
    if(IdMenu === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe seleccionar un Nom. Menú.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    if(TituloVideo === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe agregar un Título del Vídeo.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    if(destacado === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe seleccionar si es Destacado.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    Ext.Msg.show({
        title : 'ATENCIÓN',
        msg : '¿Esta seguro que desea actualizar? ',
        width : 300,
        closable : false,
        buttons : Ext.Msg.YESNOCANCEL,
        buttonText : 
        {
            yes : 'Si',
            no : 'No',
            cancel : 'Cancelar'
        },
        multiline : false,
        fn : function(buttonValue, inputText, showConfig){
            switch(buttonValue){
                case 'yes':
                    $.ajax({
                        url: ruta,
                        type: 'POST',
                        data: formImg,
                        dataType: "JSON",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend:cargando2,
                        success:function(result){
                            Ext.getBody().unmask();
                            $('#myModal').modal('hide');
                            switch(result.msj){
                                case 'Si':
                                    Ext.Msg.show({
                                        title: 'ATENCIÓN',
                                        msg: 'Proceso realizado correctamente.',
                                        buttons: Ext.Msg.OK,
                                        icon: Ext.Msg.INFO
                                    });
                                    break;
                                case 'bannerActivo':
                                    Ext.Msg.show({
                                        title: 'ATENCIÓN',
                                        msg: 'No pueden haber dos banner con estado ACTIVO.',
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
                            reload_table();
                        },
                        timeout:40000,
                        error: problemas1
                    });
                break;
            }
            
        },
        icon : Ext.Msg.QUESTION
    });
    return false;
}

function agregar_video_modal(){
    var url = base_url + '/' + pathArray[1] + '/index.php/videos/agregar';
    $.ajax({
        url : url,
        type: "POST",
        //data: {IdBanner:IdBanner},
        beforeSend:cargando1,
        success: function(result){
            Ext.getBody().unmask();
            $('#resultado').html(result);
            $("#myModal").modal("show");
        },
        timeout:40000,
        error: problemas
    });
    return false;
}

function agregar_video(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/videos/json/add';
    var formImg = new FormData($(".formulario")[0]);
    var IdMenu = $('#IdMenu').val();
    var TituloVideo = $('#TituloVideo').val();
    var archivo = $('#archivo').val();
    var destacado = $('#destacado').val();
    if(IdMenu === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe seleccionar un Nom. Menú.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    if(TituloVideo === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe agregar un Título del Vídeo.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    if(archivo === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe seleccionar una Imagen.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    if(destacado === ''){
        Ext.Msg.show({
            title: '¡ATENCIÓN!',
            msg: 'Debe seleccionar si es Destacado.',
            buttons: Ext.Msg.OK,
            icon: Ext.Msg.WARNING
        });
        return false;
    }
    $.ajax({
        url: ruta,
        type: 'POST',
        data: formImg,
        dataType: "JSON",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:cargando2,
        success:function(result){
            Ext.getBody().unmask();
            $('#myModal').modal('hide');
            if(result.msj === 'Si'){
                Ext.Msg.show({
                    title: 'ATENCIÓN',
                    msg: 'Proceso realizado correctamente.',
                    buttons: Ext.Msg.OK,
                    icon: Ext.Msg.INFO
                });
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
        error: problemas1
    });
    return false;
}

function destacado_video(IdVideo,destacado){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/videos/json/destacado';
    $.ajax({
        url: ruta,
        type: 'POST',
        data: {IdVideo:IdVideo,destacado:destacado},
        dataType: "JSON",
        //beforeSend:cargando2,
        success:function(result){
            Ext.getBody().unmask();
            $('#myModal').modal('hide');
            switch(result.msj){
                case 'Si':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'Proceso realizado correctamente.',
                        buttons: Ext.Msg.OK,
                        icon: Ext.Msg.INFO
                    });
                    break;
                case 'mostrarActivo':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'No pueden haber mas de 15 Videos Destacados.',
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
            reload_table();
        },
        timeout:40000//,
        //error: problemas1
    });
    return false;
}

function mostrar_video(IdVideo,MostrarVideo){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/videos/json/validar';
    $.ajax({
        url: ruta,
        type: 'POST',
        data: {IdVideo:IdVideo,MostrarVideo:MostrarVideo},
        dataType: "JSON",
        beforeSend:cargando2,
        success:function(result){
            Ext.getBody().unmask();
            $('#myModal').modal('hide');
            switch(result.msj){
                case 'Si':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'Proceso realizado correctamente.',
                        buttons: Ext.Msg.OK,
                        icon: Ext.Msg.INFO
                    });
                    break;
                case 'mostrarActivo':
                    Ext.Msg.show({
                        title: 'ATENCIÓN',
                        msg: 'No pueden haber mas de 5 Videos para mostrar.',
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
            reload_table();
        },
        timeout:40000,
        error: problemas1
    });
    return false;
}