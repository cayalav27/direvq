$(document).ready(function(){ 

    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );
    $('#tbare').DataTable().destroy();
    var dataTable = $('#tbare').DataTable({
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
        "url": baseurl+"Careas/getAre",
        "type": "POST",
    },
    "columnDefs":[  
            {    
                 "targets":[3],
                 "orderable":false,  
            },  
       ]

    });

    $(document).on('submit', '#updareform', function(event){  
        event.preventDefault();  
        var NomAre = $('#EdtNomAre').val();         
        if(NomAre != '')  
        {  
            $.ajax({  
                 url: baseurl+"Careas/UpdAre",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se actualizó la área!",   
                            text: "Su registro se modifico correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#updareform')[0].reset();  
                      $('#UpdAre').modal('hide');  
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

    $(document).on('click', '.updare', function(){  
        var CodAre = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Careas/GetSingleAre",  
            method:"POST",  
            data:{CodAre:CodAre},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdAre').modal('show');  
                 $('#EdtNomAre').val(data.NomAre);  
                 $('#EdtCodAre').val(CodAre);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

}); 