$(document).ready(function(){ 

    $.extend( $.fn.dataTable.defaults, {
        responsive: true
    } );
    $('#tbemp').DataTable().destroy();
    var dataTable = $('#tbemp').DataTable({
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
          "url": baseurl+"Cempleados/getEmp",
          "type": "POST",
      },
      "columnDefs":[  
              {    
                   "targets":[8],
                   "orderable":false,  
              },  
         ]
      });

    $(document).on('submit', '#updempform', function(event){  
        event.preventDefault();  
        var DniEmp = $('#EdtDniEmp').val(); 
        var NomEmp = $('#EdtNomEmp').val();  
        var ApeEmp = $('#EdtApeEmp').val();  
        var EmlEmp = $('#EdtEmlEmp').val();  
        var MovEmp = $('#EdtMovEmp').val(); 
        var UsrEmp = $('#EdtUsrEmp').val(); 
        var FcnEmp = $('#EdtFcnEmp').val();
        var CprEmp = $('#EdtCprEmp').val();
        var MprEmp = $('#EdtMprEmp').val();
        var TprEmp = $('#EdtTprEmp').val();
        var Dr1Emp = $('#EdtDr1Emp').val();
        var Dr2Emp = $('#EdtDr2Emp').val();
        var NemEmp = $('#EdtNemEmp').val();
        var IntEmp = $('#EdtIntEmp').val();
        var FcbEmp = $('#EdtFcbEmp').val();
        var LkdEmp = $('#EdtLkdEmp').val();
        var TwtEmp = $('#EdtTwtEmp').val();
        var RsmEmp = $('#EdtRsmEmp').val();          
        if(DniEmp != '' && NomEmp != '' && ApeEmp != '' && EmlEmp != '' && MovEmp != '' && UsrEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cempleados/UpdEmp",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se actualizó!",   
                            text: "Su registro de empleado se modifico correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#updempform')[0].reset();  
                      $('#UpdEmp').modal('hide');  
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

    $(document).on('submit', '#updfotemp', function(event){  
        event.preventDefault();  
        var FotEmp = $('#EdiFotEmp').val().split('.').pop().toLowerCase();  
        if(jQuery.inArray(FotEmp, ['gif','png','jpg','jpeg']) == -1)  
           {  
                swal({   
                    title: "La foto no cumple con los requisitos!",   
                    text: "No se guardo la imagen",
                    type: "error",
                    timer: 2000,   
                    showConfirmButton: false 
                });  
                $('#EdiFotEmp').val('');  
                return false;  
           } 
        if(FotEmp != '')  
        {
            $.ajax({  
               url: baseurl+"Cempleados/UpdEmpFot",  
               method:'POST',  
               data:new FormData(this),  
               contentType:false,  
               processData:false,  
               success:function(data)  
               {  
                    swal({   
                          title: "Se actualizó la foto subida!",   
                          text: "Su registro de empleado se modificó correctamente",
                          type: "success",
                          timer: 2000,   
                          showConfirmButton: false 
                      });
                    $('#updfotemp')[0].reset(); 
                    $("#EdiFotEmp").empty(); 
                    $('#UpdFotEmp').modal('hide');  
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

    $(document).on('submit', '#updpswemp', function(event){  
        event.preventDefault();  
        var PswEmp = $('#EdtPswEmp').val();       
        if(PswEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cempleados/UpdPswEmp",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se actualizó la contraseña!",   
                            text: "Su registro se modificó correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#updpswemp')[0].reset();  
                      $('#UpdPswEmp').modal('hide');  
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

    $(document).on('submit', '#insempform', function(event){  
        event.preventDefault();  
        var DniEmp = $('#InsDniEmp').val(); 
        var NomEmp = $('#InsNomEmp').val();
        var ApeEmp = $('#InsApeEmp').val();
        var EmlEmp = $('#InsEmlEmp').val();
        var MovEmp = $('#InsMovEmp').val();
        var GnrEmp = $('#InsGnrEmp').val();
        var CodCrg = $('#InsCodCrg').val();
        var CodPrf = $('#InsCodPrf').val();
        var UsrEmp = $('#InsUsrEmp').val();
        var PswEmp = $('#InsPswEmp').val();
        var FcnEmp = $('#InsFcnEmp').val();
        var CprEmp = $('#InsCprEmp').val();
        var MprEmp = $('#InsMprEmp').val();
        var TprEmp = $('#InsTprEmp').val();
        var Dr1Emp = $('#InsDr1Emp').val();
        var Dr2Emp = $('#InsDr2Emp').val();
        var NemEmp = $('#InsNemEmp').val();
        var IntEmp = $('#InsIntEmp').val();
        var FcbEmp = $('#InsFcbEmp').val();
        var LkdEmp = $('#InsLkdEmp').val();
        var TwtEmp = $('#InsTwtEmp').val();
        var RsmEmp = $('#InsRsmEmp').val();
        var FotEmp = $('#InsFotEmp').val().split('.').pop().toLowerCase();  
        if(jQuery.inArray(FotEmp, ['gif','png','jpg','jpeg']) == -1)  
           {  
                swal({   
                    title: "La foto no cumple con los requisitos!",   
                    text: "No se guardo la imagen",
                    type: "error",
                    timer: 2000,   
                    showConfirmButton: false 
                });  
                $('#InsFotEmp').val('');  
                return false;  
           }           
        if(DniEmp != '' && NomEmp != '' && ApeEmp != '' && EmlEmp != '' && MovEmp != '' && GnrEmp != '' && CodCrg != '' && CodPrf != '' && UsrEmp != '' && PswEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cempleados/InsEmp",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Se agrego al empleado!",   
                            text: "Su registro cargo correctamente",
                            type: "success",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
                      $('#insempform')[0].reset();  
                      $('#InsEmp').modal('hide');  
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

    $(document).on('click', '.updemp', function(){  
        var CodEmp = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Cempleados/GetSingleEmp",  
            method:"POST",  
            data:{CodEmp:CodEmp},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdEmp').modal('show');  
                 $('#EdtDniEmp').val(data.DniEmp);
                 $('#EdtNomEmp').val(data.NomEmp); 
                 $('#EdtApeEmp').val(data.ApeEmp); 
                 $('#EdtEmlEmp').val(data.EmlEmp); 
                 $('#EdtMovEmp').val(data.MovEmp);
                 $('#EdtUsrEmp').val(data.UsrEmp);
                 $('#EdtFcnEmp').val(data.FcnEmp);
                 $('#EdtCprEmp').val(data.CprEmp);
                 $('#EdtMprEmp').val(data.MprEmp);
                 $('#EdtTprEmp').val(data.TprEmp);
                 $('#EdtDr1Emp').val(data.Dr1Emp);
                 $('#EdtDr2Emp').val(data.Dr2Emp);
                 $('#EdtNemEmp').val(data.NemEmp);
                 $('#EdtIntEmp').val(data.IntEmp);
                 $('#EdtFcbEmp').val(data.FcbEmp);
                 $('#EdtLkdEmp').val(data.LkdEmp);
                 $('#EdtTwtEmp').val(data.TwtEmp);
                 $('#EdtRsmEmp').val(data.RsmEmp);  
                 $('#EdtCodEmp').val(CodEmp);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

    $(document).on('click', '.updfotemp', function(){  
        var CodEmp = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Cempleados/GetSingleEmp",  
            method:"POST",  
            data:{CodEmp:CodEmp},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdFotEmp').modal('show'); 
                 $('#user_uploaded_image').html(data.FotEmp); 
                 $('#EdiCodEmp').val(CodEmp);   
                 $('#action').val("Edit");  
            }  
       })  
    });  

    $(document).on('click', '.updpswemp', function(){  
        var CodEmp = $(this).attr("id");  
        $.ajax({  
            url: baseurl+"Cempleados/GetSingleEmp",  
            method:"POST",  
            data:{CodEmp:CodEmp},  
            dataType:"json",  
            success:function(data)  
            {  
                 $('#UpdPswEmp').modal('show'); 
                 $('#ECodEmp').val(CodEmp);   
                 $('#action').val("Edit");  
            }  
       })  
    }); 

    $(document).ready(function(){ 
        $(".cboempprf").select2({
            language: 'es',
            width: 'resolve',
            placeholder: 'Seleccionar opción'
        });
        $.post(baseurl+"Cempleados/getPrf",
        {
          "indicador": 1
        },
        function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
            $('#InsCodPrf').append('<option value="'+item.CodPrf+'">'+item.NomPrf+'</option>');
          }); 
        });
    });

    $(document).ready(function(){ 
        $(".cboempare").select2({
            language: 'es',
            width: 'resolve',
            placeholder: 'Seleccionar opción'
        });
        $.post(baseurl+"Cempleados/getAre",
        {
          "indicador": 1
        },
        function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
            $('#InsCodAre').append('<option value="'+item.CodAre+'">'+item.NomAre+'</option>');
          }); 
        });
    });

    $(document).ready(function(){
        $(".cboempcrg").select2({
            language: 'es',
            width: 'resolve',
            placeholder: 'Seleccionar opción'
        });
        $("#InsCodAre").change(function () {                    
            $("#InsCodAre option:selected").each(function () {
                InsCodAre = $(this).val();
                  $.post(baseurl+"Cempleados/getCrg", { InsCodAre: InsCodAre }, function(data){
                    var c = JSON.parse(data);
                    $("#InsCodCrg").empty();
                      $.each(c,function(i,item){
                        $("#InsCodCrg").append('<option value="'+item.CodCrg+'">'+item.NomCrg+'</option>');
                    });
                });            
            });
        });
    });

    $(document).on('click', '.dltemp', function(){  
       var CodEmp = $(this).attr("id"); 
       var Ind = $(this).attr("ind");
       if (Ind == 1) {
          swal({
              title: '¿Quieres inhabilitar al empleado?',
              text: "El registro del empleado no se podra editar al confirmar",
              imageUrl: baseurl+"assets/images/complement/clientedlt.png",
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
                       url: baseurl+"Cempleados/InhSingleEmp",  
                       method:"POST",  
                       data:{CodEmp:CodEmp},  
                       success:function(data)  
                       {   
                          swal({   
                              title: "Se inhabilito al empleado!",   
                              text: "Su registro se desactivo correctamente",
                              type: "success",
                              timer: 2000,   
                              showConfirmButton: false 
                          });
                          dataTable.ajax.reload();  
                       }  
                  }); 
              } else {
                  swal("Cancelado", "Los datos del empleado estan a salvo", "error");
              }
          });
      }
      else {
          swal({
              title: '¿Quieres habilitar al empleado?',
              text: "Al confirmar se habilitara la edición del empleado",
              imageUrl: baseurl+"assets/images/complement/habemp.jpg",
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
                       url: baseurl+"Cempleados/HabSingleEmp",  
                       method:"POST",  
                       data:{CodEmp:CodEmp},  
                       success:function(data)  
                       {   
                          swal({   
                              title: "Se habilito al empleado!",   
                              text: "Su registro se volvio habilitar correctamente",
                              type: "success",
                              timer: 2000,   
                              showConfirmButton: false 
                          });
                          dataTable.ajax.reload();  
                       }  
                  }); 
              } else {
                  swal("Cancelado", "Los datos del empleado estan a salvo", "error");
              }
          });
      }
    }); 

    

}); 

