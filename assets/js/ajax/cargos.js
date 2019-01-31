$(document).ready(function(){ 

    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );

    $('#tbcrg').DataTable().destroy();
    var dataTable = $('#tbcrg').DataTable({
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
        "url": baseurl+"Ccargos/getCrg",
        "type": "POST",
    },
    "columnDefs":[  
            {    
                 "targets":[4],
                 "orderable":false,  
            },  
       ]
    });

    $(document).on('submit', '#updcrgform', function(event){  
        event.preventDefault();  
        var NomCrg = $('#EdtNomCrg').val();         
        if(NomCrg != '')  
        {  
            $.ajax({  
                 url: baseurl+"Ccargos/UpdCrg",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se actualizó el cargo!",   
                            text: "Su registro se modifico correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#updcrgform')[0].reset();  
                      $('#UpdCrg').modal('hide');  
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

    $(document).on('click', '.updcrg', function(){  
        var CodCrg = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Ccargos/GetSingleCrg",  
            method:"POST",  
            data:{CodCrg:CodCrg},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdCrg').modal('show');  
                 $('#EdtNomCrg').val(data.NomCrg);  
                 $('#EdtCodCrg').val(CodCrg);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

}); 