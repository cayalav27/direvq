$(document).ready(function(){ 

    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );
    $('#tbmrc').DataTable().destroy();
    var dataTable = $('#tbmrc').DataTable({
     "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },  
    'Processing': true,
    'serverSide': true,
    'ajax': {
        "url": baseurl+"Cmarcas/getMrc",
        "type": "POST",
    },
    "columnDefs":[  
            {    
                 "targets":[3],
                 "orderable":false,  
            },  
       ]
    });     

    $(document).on('submit', '#updmrcform', function(event){  
        event.preventDefault();  
        var NomMrc = $('#EdtNomMrc').val();         
        if(NomMrc != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cmarcas/UpdMrc",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se actualizó!",   
                            text: "Su registro se modifico correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#updmrcform')[0].reset();  
                      $('#UpdMrc').modal('hide');  
                      dataTable.ajax.reload();  
                 }  
            });  
        }  
        else  
        {  
            swal({   
                title: "No se actualizó!",   
                text: "Completar los campos vacios",
                type: "error",
                timer: 2000,   
                showConfirmButton: false 
            }); 
        }  
    }); 

    $(document).on('click', '.updmrc', function(){  
        var CodMrc = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Cmarcas/GetSingleMrc",  
            method:"POST",  
            data:{CodMrc:CodMrc},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdMrc').modal('show');  
                 $('#EdtNomMrc').val(data.NomMrc);  
                 $('#EdtCodMrc').val(CodMrc);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

}); 