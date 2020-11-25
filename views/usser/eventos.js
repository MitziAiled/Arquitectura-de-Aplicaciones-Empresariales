$(document).ready(function(){

	// accion de registro callejero
	$("#enviar_formulario").click(function() {
		alta_callejero();
	});

	// accion de consultar callejero
	$("#btn_consultar").click(function() {
		consulta_callejero();
    });

    //accion de modificar estatus callejero
    $("#btn_modificar_estatus").click(function() {
		modificar_estatus();
    });

    //accion de registro adopcion
    $("#btn_registrar_adopcion").click(function() {
		alta_adopcion();
	});
});

function consulta_callejero(callejeros) {
	let html = '';
	for (let index in callejeros) {
		html += "<tr class='text-center'>" +
				"<td>"+callejeros[index].idcallejeros+"</td>" +
				"<td>"+callejeros[index].calle+"</td>" +
				"<td>"+callejeros[index].colonia+"</td>" +
				"<td>"+callejeros[index].rasgo_fisicos+"</td>" +
				"<td>"+callejeros[index].condicion+"</td>" +
			"</tr>";
	}

	$("#tabla_consultacallejero").html(html);
}