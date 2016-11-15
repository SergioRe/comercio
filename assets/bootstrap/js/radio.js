//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
var table;

$(document).ready(function() {
    var url = base_url + '/' + pathArray[1] + '/index.php/radio/json/list';
    table = $('#tableradio').DataTable({
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

function destacado_salud(IdCategoria,IdVideo,DestacadoCategoria){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/radio/json/destacado';
    $.ajax({
        url: ruta,
        type: 'POST',
        data: {IdCategoria:IdCategoria,IdVideo:IdVideo,DestacadoCategoria:DestacadoCategoria},
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
                        msg: 'No pueden haber mas de 8 Videos Destacados.',
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

function reload_table(){
    table.ajax.reload(null,false);
}