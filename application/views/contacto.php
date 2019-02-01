<?php 
	$fConfig = obtener_parametros_configuracion();
?>
<div class="page page-contacto">
	<div class="box-breadcrumb">
		<div class="container">
			<div class="text-breadcrumb"> <span>Home</span> / <strong>Contáctanos</strong> </div>
		</div> 
	</div>
	<div class="box-content container">
		<div class="row">
			<?php if( $this->session->flashdata('bool_info') == 'ok' ){ ?>
				<div class="col-lg-12">
					<div class="info-success">
						Envío satisfactorio, en seguida nos comunicaremos con Ud. 
					</div>
				</div>
			<?php } ?>
			<?php if( $this->session->flashdata('bool_info') == 'error' ){ ?>
				<div class="col-lg-12">
					<div class="info-danger">
						Ocurrió un error, inténtelo nuevamente. 
					</div>
				</div>
			<?php } ?> 
			<div class="box-info-contacto col-lg-5 col-sm-5 col-md-12 col-xs-12"> 
				<div class="box-direccion">
					<div class="box-title-direccion">
						<h2> Oficina Principal </h2>
					</div>
					<div class="box-content-direccion">
						<i class="fa fa-map-marker"></i> Av. Gran Chimú 1421 Urb. Zárate S.J.L. 
					</div> 
				</div>
				<div class="box-horario">
					<div class="box-title-horario">
						<h2> Horario de Atención </h2>
					</div>
					<div class="box-content-horario">
						<i class="fa fa-clock"></i> Lun. a Sab. 9am - 5:30pm 
					</div> 
				</div>
				<div class="box-telefono">
					<div class="box-title-telefono">
						<h2> Teléfonos </h2>
					</div>
					<div class="box-content-telefono">
						<i class="fa fa-phone"></i> 945 142 588 / 704-3855  
					</div> 
				</div>
				<div class="box-correo">
					<div class="box-title-correo">
						<h2> Email </h2>
					</div>
					<div class="box-content-correo">
						<a href="mailto:informes@dcyjvasociados.com"> <i class="fas fa-envelope"></i> informes@dcyjvasociados.com </a>
					</div> 
				</div>
			</div>
			<div class="box-formulario col-lg-7 col-sm-5 col-md-12 col-xs-12"> 
				<form class="form" method="post" name="form_contacto">
					<div class="form-group">
					    <label for="nombres">Nombre Completo <span>*</span> </label>
					    <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Nombre Completo" required>
					</div>
					<div class="form-group">
					    <label for="telefono">Teléfono <span>*</span> </label>
					    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Teléfono" required>
					</div>
					<div class="form-group">
					    <label for="mail">Email <span>*</span> </label>
					    <input name="mail" type="email" class="form-control" id="mail" placeholder="Email" required>
					</div>
					<div class="form-group">
					    <label for="mensaje">Mensaje</label>
					    <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
					</div>
					<button type="submit" class="btn btn-default">ENVIAR</button>
				</form>
			</div>
		</div>
		<div class="box-maps"> 
			<div id="map-dcjv"></div> 
		</div>
	</div>
</div>
<script type="text/javascript"> 
	// Initialize and add the map  , AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY

	function initMap() {
	  var posdcjv = {lat: -12.023995, lng: -76.988537};
	  var map = new google.maps.Map(
	      document.getElementById('map-dcjv'), {zoom: 12, center: posdcjv});
	  var marker = new google.maps.Marker({position: posdcjv, map: map});
	}
</script>

<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZooz66oNyefiGdO7JueDtqUGQBBUIUHY&callback=initMap"> 
</script>