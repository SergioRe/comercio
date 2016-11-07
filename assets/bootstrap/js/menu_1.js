//variables globales
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
var table;

$(document).ready(function() {
    var url = base_url + '/' + pathArray[1] + '/index.php/menu/json/list';
    table = $('#tablemenu').DataTable({
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
            "targets": [ 0,1,2 ],
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

function edit_menu(IdMenu){
    var url = base_url + '/' + pathArray[1] + '/index.php/menu/editar';
    $.ajax({
        url : url,
        type: "POST",
        data: {IdMenu:IdMenu},
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

function actualizar_menu(){
    var ruta = base_url + '/' + pathArray[1] + '/index.php/menu/json/update';
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
                        type: "POST",
                        dataType: "JSON",
                        data: $('#formusuario').serialize(),
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
                break;
            }
            
        },
        icon : Ext.Msg.QUESTION
    });
}

function reload_table(){
    table.ajax.reload(null,false);
}
