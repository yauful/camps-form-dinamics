$(document).ready(function() {

	var max_fields = 15; //maximum input boxes allowed
	var wrapper = $(".input_fields_wrap"); //Fields wrapper
	var add_button = $(".add_field_button"); //Add button ID
	var x = 1; //initlal text box count
	$(add_button).click(function(e) {
		//on add input button click
		e.preventDefault();
		if (x < max_fields) {
			//max input box allowed
			x++; //text box increment
			$(wrapper).append(
				'<div class="boxDatosFacturas"><h3>Datos factura ' +
					x +
					'</h3><div class="form-group" ><label for="">Número factura</label><input name="nFactura[]" type="text" value="" class="form-control" required=""></div><div class="form-group"><label for="">Referencia</label><input name="referencia[]" type="text" value="" class="form-control"></div><div class="form-group"><label for="">Descripción anomalia</label><textarea class="form-control" name="descripcionAnomalia[]" required=""></textarea></div><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">Remove</div></div>'
			); //add input box
		}
	});
	$(wrapper).on("click", ".remove_field", function(e) {
		//user click on remove text
		e.preventDefault();
		$(this)
			.parent("div")
			.remove();
		x--;
	});

	
});