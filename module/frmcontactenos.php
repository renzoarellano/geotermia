<?php if (isset($_POST['nombre'])){
	require '../common/secufaile.php'; require '../common/config.php';
	require SLASH_SUP.$path['lib'].'phpmailer'.SLASH.'class.phpmailer.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth=true;
	$mail->SMTPSecure="ssl";
	$mail->Host="smtp.live.com";
	$mail->Port=25;
	$mail->Username="webradicalac@hotmail.com";
	$mail->Password="xxx";
    $mail->AddReplyTo($_POST['correo'], $_POST['nombre']);
	$mail->From="webradicalac@hotmail.com";
	$mail->FromName="Datos de Contáctenos - Página web";
	$mail->Subject="Datos de Contáctenos - Página web";
	$mail->AltBody="Datos de Contáctenos - Página web";
	$mail->CharSet="UTF-8";
	$mail->MsgHTML("
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset='UTF-8'>
		</head>
		<body>
<div style='width:750px;margin: auto;'>
	<div style='color:#fff;text-align:center;background:#5A5959;padding-top:15px;padding-bottom:15px;'>
		<h1>Datos enviados de la página web </h1>
	</div>

	<div style='width:100%;border:1px solid #ccc;padding-top:15px;padding-bottom:15px;'>
		<table class='table table-bordered' style='margin: auto;'>
			<thead>
				<tr>
					<th style='border:1px solid #000;padding:8px;'>Nombre</th>
					<th style='border:1px solid #000;padding:8px;'>Teléfono</th>
					<th style='border:1px solid #000;padding:8px;'>Correo</th>
					<th style='border:1px solid #000;padding:8px;'>Mensaje</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style='border:1px solid #000;padding:8px;'>".$_POST['nombre']."</td>
					<td style='border:1px solid #000;padding:8px;'>".$_POST['telefono']."</td>
					<td style='border:1px solid #000;padding:8px;'>".$_POST['correo']."</td>
					<td style='border:1px solid #000;padding:8px;'>".$_POST['mensaje']."</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div style='color:#fff;text-align:center;background:#5A5959;padding-top:15px;padding-bottom:15px;'>
		<h1></h1>
	</div>
</div>
		</body>
		<html>
	");
	$mail->AddCC("hvasquez@heedcom.com","hvasquez@heedcom.com");
	$mail->IsHTML(true);
	if(!$mail->Send()) { $rpta = $contact['msgok']; } else { $rpta = $contact['msgerror']; }
	echo $rpta; exit(1);
} ?>


	<div class="col-xs-12 pad-form np">
		<form name="frmcontactenos" id="frmcontactenos">
			<!--	<div class="col-xs-12 np">
					<label class="form-titulos">Asunto</label>
					<div class="form-group">
						<select name="modelo" id="modelo" class="form-control tamano-selected form-style" aria-required="true">
			        <option selected="" value="" class="color-selected">Seleccione su modelo</option>
			        <option value="4">Stepway</option>
							<option value="5">Koleos</option>
							<option value="6">Sandero</option>
							<option value="8">Logan</option>
							<option value="16">Fluence</option>
							<option value="21">Duster</option>
							<option value="167">Duster Oroch</option>
							<option value="171">Captur</option>
						</select>
					</div>
					<p class="p-formstyle">Selecciona una opción</p>
				</div> -->
				<div class="col-xs-12 np espacio-inputs">
				  <div class="form-group">
					<label class="form-titulos">Nombres y Apellidos</label>
				    <input type="text" id="nombre"  class="form-control form-style" name="nombre" minlength="3"  placeholder="Ingrese sus nombres y apellidos" required>
				  </div>
					<p  class="p-formstyle">Ingrese sus nombres y apellidos correctamente</p>
				</div>
				<div class="col-xs-12 np espacio-inputs">
		      <div class="form-group">
							<label class="form-titulos">DNI</label>
		        <input type="text" class="form-control form-style color-effect2" name="dni" id="dni" minlength="8" maxlength="8" placeholder="Ingrese su DNI" required>
		      </div>
					<p id="opcdni" class="p-formstyle">Ingrese su documento de identidad correctamente</p>
		    </div>
		    <div class="col-xs-12 np espacio-inputs">
		      <div class="form-group">
							<label class="form-titulos">Celular</label>
		        <input type="text" class="form-control form-style color-effect3" name="telefono" id="telefono"  maxlength="9" placeholder="Ingrese su celular" required>
		      </div>
					<p id="opctelefono"  class="p-formstyle">Ingrese su celular correctamente</p>
		    </div>
				<div class="col-xs-12 np espacio-inputs">
				  <div class="form-group">
							<label class="form-titulos">Correo</label>
				    <input type="email" class="form-control form-style" name="correo" id="correo" placeholder="Ingrese su correo" required>
				  </div>
					<p class="p-formstyle">Ingrese su correo correctamente</p>
				</div>

				<div class="col-xs-12 np espacio-inputs">
					<div class="form-group">
					<label class="form-titulos">Tienda</label>
					<select name="iSalon" id="iSalon" class="form-style form-control tamano-selected"  required>
		          <option value="" disabled>Seleccione su concesionario</option>
			        <option value="14">Arequipa - Roberts Resersur</option>
							<option value="76">Cajamarca - MSA Automotriz</option>
							<option value="22">Chiclayo - PAKATNAMU</option>
							<option value="13">Chimbote - BMOTORS - Chimbote</option>
							<option value="16">Cusco - Andean Motors </option>
							<option value="20">Huancayo - Huanca Autos</option>
							<option value="18">Ica - Pacifico Motors</option>
							<option value="28">Juliaca - Corsa Automotriz </option>
							<option value="70">Lima - Braillard La Victoria</option>
							<option value="36">Lima - DERCOCENTER  Ate</option>
							<option value="11">Lima - DERCOCENTER  Chorrillos</option>
							<option value="7">Lima - DERCOCENTER Plaza Norte</option>
							<option value="74">Lima - DERCOCENTER Primavera</option>
							<option value="10">Lima - DERCOCENTER San Martin de Porres</option>
							<option value="8">Lima - DERCOCENTER Surquillo</option>
							<option value="9">Lima - MAQUINARIAS LA MOLINA</option>
							<option value="73">Lima - MAQUINARIAS MAL DEL SUR</option>
							<option value="77">Lima - MAQUINARIAS SAN MIGUEL </option>
							<option value="32">Lima - Renault Maquinarias C.C. Plaza Norte</option>
							<option value="24">Piura - DERCOCENTER Piura</option>
							<option value="69">Pucallpa - Autobacs Oriente</option>
							<option value="75">Tarapoto - MOTORSHOW</option>
							<option value="21">Trujillo - Mannucci Diesel - Trujillo </option>
					</select>
					</div>
					<p class="p-formstyle">Seleccione una tienda</p>
				</div>

		 <!-- <div class="col-xs-12 np espacio-inputs">
				<div class="form-group">
			    <div class="col-xs-12 np">
						<label class="form-titulos">Mensaje</label>
						<textarea class="form-control textar form-style" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
			    </div>
			  </div>
				<p class="p-formstyle">Ingrese un texto dentro del rango 10 a 100 caracteres</p>
		  </div> -->

			<div class="col-xs-12 np espacio-inputs">
				<div class="form-group">
				 <div class="col-xs-12 np text-justify color-condiciones">
					 <input type="checkbox" id= name="terminos" id="condiciones" value="1"> Acepto que los datos ingresados, se almacenen en el Banco de Datos Personales de Derco Perú S.A con los siguientes
					 <a href="#" data-toggle="modal" data-target="#modalCondiciones">terminos y condiciones.</a>
				 </div>
			 </div>

			</div>
		 <div class="col-xs-12 np espacio-inputs">
			 <div class="form-group">
			  <div class="col-xs-12 np text-justify color-condiciones">
			 	 <input type="checkbox" name="terminos" id="condicionesdatos" value="1"> Acepto el uso de los datos con los siguientes
			 	 <a href="#" data-toggle="modal" data-target="#modalCondiciones">terminos y condiciones.</a>
			  </div>
			 </div>
		 </div>

		 <div class="col-xs-12 np espacio-inputs">
			<div class="form-group">
			 <div class="col-xs-12 np text-justify color-condiciones">
				<input type="checkbox" name="terminos" id="evaluacion" value="1"> Acepto ser evaluado para un crédito vehicular.</a>
			 </div>
			</div>
		</div>

		 <div class="col-xs-12 np espacio-inputs">
			 <div class="text-center">
 		  	 <button type="submit" class="btn-send" id="EnviarForm">ENVIAR</button>
 		  </div>
		 </div>

		  <div id="dialog" title="Mensaje Contáctenos" style="display:none;">
		    <p id="rpta"></p>
		  </div>
		</form>
	</div>


	<!-- Modal Legales de la Web -->
	<div class="modal fade" id="modalCondiciones" tabindex="-1" role="dialog" aria-labelledby="modalBases" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title style-titlemodal" id="exampleModalBases">LEGAL PARA COTIZAR</h5>
	                <button type="button" class=" close " data-dismiss="modal" aria-label="Close">
	                    <span  aria-hidden="true" class="style-x">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
							 Los datos que nos facilite nos permitirán gestionar su solicitud.
							  Adicionalmente usted autoriza que Derco Perú S.A. trate sus datos personales para el envío por medios postales, telefónicos y electrónicos,
								información sobre desarrollo de productos, servicios, ofertas, comunicaciones comerciales y promociones especiales que puedan ser de
								beneficio para usted, salvo que marque la casilla incluida más abajo, que usted no acepta recibir esta información. <br>
<span class="excepcion-colormodal">Nota: </span>El envío de esta información implica que usted está aceptando los aspectos legales y políticas de privacidad de este sitio web.
	            </div>

	        </div>
	    </div>
	</div>



<link rel="stylesheet" href="common/lib/jqueryui/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
<script src="common/lib/jqueryui/js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
<!--

/*function validate() {
  var element = document.getElementById('nombre');
  element.value = element.value.replace(/[^a-zA-Z]+/, '');
	if(element.lenght <3){

	}
};
onkeyup="validate();"  -> Se agrego esto en el input
*/

$(document).ready(function(){

/*	$("#nombre").on('keyup', function(e) {
	    var val = $(this).val();
	   if (val.match(/[^a-zA-Z]/g)) {
	       $(this).val(val.replace(/[^a-zA-Z]/g,''));
	   }
	}); */
	$("#nombre").keyup(function (e) {
				// Permite: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
						// Permite: Ctrl+A
						(e.keyCode == 65 && e.ctrlKey === true) ||
						// Permite: home, end, left, right
						(e.keyCode <= 35 && e.keyCode <= 39)) {
						// solo permitir lo que no este dentro de estas condiciones es un return false
						return;
				}
				// Aseguramos que son letras
				if ((e.shiftKey || (e.keyCode > 64 || e.keyCode < 91)) && (e.keyCode > 96 || e.keyCode <123 )) {
						e.preventDefault();
				}
		});

	$("#dni").keydown(function (e) {
		var dni = $("#dni").val();
		if(dni.length<8){
			$('#opcdni').css('opacity','1');
		//	$('.color-effect').css('border-color','#FF1D25');
		}else if(dni.length == 8){
			$('#opcdni').css('opacity','0');
			$('.color-effect2').css('border-color','#39B54A');
		}
				// Permite: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
						// Permite: Ctrl+A
						(e.keyCode == 65 && e.ctrlKey === true) ||
						// Permite: home, end, left, right
						(e.keyCode >= 35 && e.keyCode <= 39)) {
						// solo permitir lo que no este dentro de estas condiciones es un return false

						return;
				}

				// Aseguramos que son numeros
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

						e.preventDefault();
				}


		});

		$("#telefono").keydown(function (e) {
					// Permite: backspace, delete, tab, escape, enter and .
					var telefono = $("#telefono").val();
					if(telefono.length<9){
						$('#opctelefono').css('opacity','1');
					//	$('.color-effect').css('border-color','#FF1D25');
				}else if(telefono.length == 9){
						$('#opctelefono').css('opacity','0');
						$('.color-effect3').css('border-color','#39B54A');
					}
					if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
							// Permite: Ctrl+A
							(e.keyCode == 65 && e.ctrlKey === true) ||
							// Permite: home, end, left, right
							(e.keyCode >= 35 && e.keyCode <= 39)) {
							// solo permitir lo que no este dentro de estas condiciones es un return false
							return;
					}
					// Aseguramos que son numeros
					if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
							e.preventDefault();

					}
			});


	$("#EnviarForm").click(function(){
	//	var modelo = $("#modelo").val();
		var nombre = $("#nombre").val();
		var dni = $("#dni").val();
		var telefono = $("#telefono").val();
		var correo = $("#correo").val();
		var tienda = $("#iSalon").val();
		var tienda = $("#condiciones").val();
		var tienda = $("#condicionesdatos").val();
		var tienda = $("#evaluacion").val();
		//var mensaje = $("#mensaje").val();
		$.ajax({
			url:'uso.php',
			type:'POST',
			data:{nombre:nombre, telefono:telefono,  correo:correo, mensaje:mensaje},
			datatype:'html',
			beforeSend:function(){
				$("#dialog").dialog({
					resizable:false,
					modal:true,
					autoOpen:true,
					width:350,
					height:120
				});
				$("#dialog #rpta").html("Enviando...");
			},
			success:function(html){
				$("#dialog #rpta").html(html);
			}
		});
	});
});
//-->
</script>
