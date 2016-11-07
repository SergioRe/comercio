//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
var table;

$(document).ready(function() {
    var url = base_url + '/' + pathArray[1] + '/index.php/banner/json/list';
    table = $('#tablebanner').DataTable({
        "pageLength": 7,
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "order": [], 
        "ajax": {
            "url": url,
            "type": "POST"
        },
        "columnDefs": [{ 
            "targets": [ 0,1,2,3,4 ],
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

function edit_banner(IdBanner){
    var url = base_url + '/' + pathArray[1] + '/index.php/banner/editar';
    $.ajax({
        url : url,
        type: "POST",
        data: {IdBanner:IdBanner},
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

function agregar_banner_modal(){
    var url = base_url + '/' + pathArray[1] + '/index.php/banner/agregar';
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
}

function actualizar_banner(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/banner/json/update';
    var formImg = new FormData($(".formulario")[0]);

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
    //return false;
}

function reload_table(){
    table.ajax.reload(null,false); //reload datatable ajax 
}

function agregar_banner(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/banner/json/add';
    var formImg = new FormData($(".formulario")[0]);
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
}