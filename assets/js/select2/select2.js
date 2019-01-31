$(document).ready(function(){ 
	$(".select2").select2({
    	language: 'es',
    	width: 'resolve',
		placeholder: 'Seleccionar opción'
	});
	$(".Sel2GnrEmp").select2({
    	language: 'es',
    	width: 'resolve',
		placeholder: 'Seleccionar opción',
		minimumResultsForSearch: Infinity
	});
	$(".Sel2CodPrf").select2({
    	language: 'es',
    	width: 'resolve',
		placeholder: 'Seleccionar opción',
		minimumResultsForSearch: Infinity
	});
}); 