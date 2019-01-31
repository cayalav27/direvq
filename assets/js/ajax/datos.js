$(document).ready(function(){ 
    $(document).on('submit', '#UpdEmpCor', function(event){  
        event.preventDefault();   
        var EmlEmp = $('#TxtEmlEmp').val();  
        var MovEmp = $('#TxtMovEmp').val();          
        if(EmlEmp != '' && MovEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cdatos/UpdEmpCor",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Sus datos se modificó correctamente",   
                            text: "Su sessión se cerrará automaticamente para aplicar los cambios",
                            type: "success",
                            timer: 3000,   
                            showConfirmButton: false
                        },
                      function(){
                        $.ajax({
                          url: baseurl+"clogin/logout",
                          type:"POST", 
                          data:{},
                          success:function(){
                            window.location.href = baseurl;
                          }
                        }); 
                      });
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

    $(document).on('submit', '#UpdEmpPrs', function(event){  
        event.preventDefault();  
        var DniEmp = $('#TxtDniEmp').val(); 
        var NomEmp = $('#TxtNomEmp').val();  
        var ApeEmp = $('#TxtApeEmp').val(); 
        var FcnEmp = $('#TxtFcnEmp').val();
        var CprEmp = $('#TxtCprEmp').val();
        var MprEmp = $('#TxtMprEmp').val();
        var TprEmp = $('#TxtTprEmp').val();
        var Dr1Emp = $('#TxtDr1Emp').val();
        var Dr2Emp = $('#TxtDr2Emp').val();
        var NemEmp = $('#TxtNemEmp').val();
        var IntEmp = $('#TxtIntEmp').val();
        var FcbEmp = $('#TxtFcbEmp').val();
        var LkdEmp = $('#TxtLkdEmp').val();
        var TwtEmp = $('#TxtTwtEmp').val();
        var RsmEmp = $('#TxtRsmEmp').val();          
        if(DniEmp != '' && NomEmp != '' && ApeEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cdatos/UpdEmpPrs",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Sus datos se modificó correctamente",   
                            text: "Su sessión se cerrará automaticamente para aplicar los cambios",
                            type: "success",
                            timer: 3000,   
                            showConfirmButton: false
                        },
                      function(){
                        $.ajax({
                          url: baseurl+"clogin/logout",
                          type:"POST", 
                          data:{},
                          success:function(){
                            window.location.href = baseurl;
                          }
                        }); 
                      });
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

    $(document).on('submit', '#UpdEmpFot', function(event){  
        event.preventDefault();  
        var FotEmp = $('#TxtFotEmp').val().split('.').pop().toLowerCase();  
        if(jQuery.inArray(FotEmp, ['gif','png','jpg','jpeg']) == -1)  
           {  
                swal({   
                    title: "La foto no cumple con los requisitos!",   
                    text: "No se guardo la imagen",
                    type: "error",
                    timer: 2000,   
                    showConfirmButton: false 
                });  
                $('#TxtFotEmp').val('');  
                return false;  
           } 
        if(FotEmp != '')  
        {
            $.ajax({  
               url: baseurl+"Cdatos/UpdEmpFot",  
               method:'POST',  
               data:new FormData(this),  
               contentType:false,  
               processData:false,  
               success:function(data)  
                 {  
                      swal({   
                            title: "Sus datos se modificó correctamente",   
                            text: "Su sessión se cerrará automaticamente para aplicar los cambios",
                            type: "success",
                            timer: 3000,   
                            showConfirmButton: false
                        },
                      function(){
                        $.ajax({
                          url: baseurl+"clogin/logout",
                          type:"POST", 
                          data:{},
                          success:function(){
                            window.location.href = baseurl;
                          }
                        }); 
                      });
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

    $(document).on('submit', '#UpdEmpPsw', function(event){  
        event.preventDefault();  
        var PswEmp = $('#TxtPswEmp').val();       
        if(PswEmp != '')  
        {  
            $.ajax({  
                 url: baseurl+"Cdatos/UpdEmpPsw",  
                 method:'POST',  
                 data:new FormData(this),  
                 contentType:false,  
                 processData:false,  
                 success:function(data)  
                 {  
                      swal({   
                            title: "Sus datos se modificó correctamente",   
                            text: "Su sessión se cerrará automaticamente para aplicar los cambios",
                            type: "success",
                            timer: 3000,   
                            showConfirmButton: false
                        },
                      function(){
                        $.ajax({
                          url: baseurl+"clogin/logout",
                          type:"POST", 
                          data:{},
                          success:function(){
                            window.location.href = baseurl;
                          }
                        }); 
                      });
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
}); 

