$(document).on("ready",main);

function main(){
	$("#login").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp){
				if(resp==="error"){
					swal({   
                            title: "Fallo!",   
                            text: "Usuario o Password incorrecto",
                            type: "error",
                            timer: 2000,   
                            showConfirmButton: false 
                        });
				}
				else{
					switch(resp) {
					    case 'administrador':
							window.location.href = baseurl+"canexos";
					        break;
					    case 'usuario':
					        window.location.href = baseurl+"cdirectorio";
					        break;
					    case 'supervisor':
					        window.location.href = baseurl+"csegemp";
					        break;
					}
				}
			}
		});
	});

	$("#logout").on("click",function(event){
		event.preventDefault();
		swal({   
            title: "¿Quieres salir del sistema?",   
            text: "Si presiona confirmar se cerrará su sesión",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "SI",   
            cancelButtonText: "NO",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
               $.ajax({
					url: baseurl+"clogin/logout",
					type:"POST", 
					data:{},
					success:function(){
						window.location.href = baseurl;
					}
				});  
            } else {     
                swal("Cancelled", "Se canceló el cierre de la sesión :)", "error");   
            } 
        });
	});
}