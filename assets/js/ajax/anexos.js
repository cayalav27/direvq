$(document).ready(function(){ 

    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );
    $('#tbanx').DataTable().destroy();
    var dataTable = $('#tbanx').DataTable({
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
        "url": baseurl+"Canexos/getAnx",
        "type": "POST",
    },
    "columnDefs":[  
            {    
                 "targets":[8],
                 "orderable":false,  
            },  
       ]
    });     
    $(document).on('submit', '#insanxform', function(event){  
        event.preventDefault();  
        var AnxDir = $('#InsAnxDir').val(); 
        var CodEmp = $('#InsCodEmp').val();           
        if(AnxDir != '' && CodEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Canexos/InsAnx",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se agrego el anexo!",   
                            text: "Su registro cargo correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#insanxform')[0].reset();  
                      $('#InsAnx').modal('hide');  
                      dataTable.ajax.reload();  
                 }  
            });  
        }  
        else  
        {  
            swal({   
                title: "No se registro!",   
                text: "Completar los campos vacios",
                type: "error",
                timer: 2000,   
                showConfirmButton: false 
            }); 
        }  
    }); 

    $(document).on('submit', '#updanxform', function(event){  
        event.preventDefault();  
        var AnxDir = $('#EdtAnxDir').val();         
        if(AnxDir != '')  
        {  
            $.ajax({  
                 url: baseurl+"Canexos/UpdAnx",  
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
                      $('#updanxform')[0].reset();  
                      $('#UpdAnx').modal('hide');  
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

    $(document).on('click', '.dltanx', function(){  
       var CodDir = $(this).attr("id"); 
       swal({
            title: '¿Quieres eliminar este anexo?',
            text: "El registro se inactivará y no podrás editarlo",
            type: "error",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: 'Sí',
            cancelButtonText:  'No',
            closeOnConfirm: false,
            closeOnCancel: false
            
        },
        function(isConfirm) {
            if (isConfirm) {
                $.ajax({  
                     url: baseurl+"Canexos/DltSingleAnx",  
                     method:"POST",  
                     data:{CodDir:CodDir},  
                     success:function(data)  
                     {   
                        swal({   
                            title: "Se elimino!",   
                            text: "Su registro se eliminó correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                        dataTable.ajax.reload();  
                     }  
                }); 
            } else {
                swal("Cancelado", "El anexo registrado está a salvo", "error");
            }
        });
    }); 

    $(document).on('click', '.updanx', function(){  
        var CodDir = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Canexos/GetSingleAnx",  
            method:"POST",  
            data:{CodDir:CodDir},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdAnx').modal('show');  
                 $('#EdtAnxDir').val(data.AnxDir);  
                 $('#EdtCodEmp').val(data.CodEmp);
                 $('#EdtCodDir').val(CodDir);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

    $(document).ready(function(){ 
        $(".cboanxemp").select2({
            language: 'es',
            width: 'resolve',
            placeholder: 'Seleccionar opción'
        });
        $.post(baseurl+"Canexos/getEmp",
        {
          "indicador": 1
        },
        function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
            $('#InsCodEmp').append('<option value="'+item.CodEmp+'">'+item.ApeEmp+', '+item.NomEmp+'</option>');
          }); 
        });
    });

}); 