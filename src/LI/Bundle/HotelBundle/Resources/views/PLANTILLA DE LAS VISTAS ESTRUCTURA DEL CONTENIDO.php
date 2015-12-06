//CAMBIAR CADA FORM PARA QUE LOS BOTONES SEAN SIZE MEDIUM
<div class="row">
	<div class="col-lg-3 col-sm-3 col-xs-12">
		<ul class="nav nav-stacked">
			<li role="presentation"></li>
			<li role="presentation"></li>
		</ul>
	</div>

	<!-- PANEL DEL CONTENIDO -->
	<div class="col-lg-9 col-sm-9 col-xs-12">

	</div>
</div>

/* MENSAJES DIMISILES */
//INFORMATIVOS
{% for flashMessage in app.session.flashbag.get('tipohabitacion_info') %}
	<div class = "alert alert-info alert-dismissable">
	    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
	    <b>Pss! Disculpe. </b> {{ flashMessage }}
	</div>
{% endfor %}

//BUENOS
{% for flashMessage in app.session.flashbag.get('tipohabitacion_buenos') %}
    <div class = "alert alert-success alert-dismissable">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <b>Muy bien!</b> {{ flashMessage }}
    </div>
{% endfor %}

//MALOS
{% for flashMessage in app.session.flashbag.get('tipohabitacion_malos') %}
	<div class = "alert alert-danger alert-dismissable">
	    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
	    <b>Holy Whack-A-Mole!</b> {{ flashMessage }}
	</div>
{% endfor %}


/** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **/
<li role="presentation"><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarReserva">Eliminar Reserva</a></li>

<!-- EL MODAL -->
<div class="modal fade" id="ModalEliminarReserva" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-danger">¡Cuidado!</h4>
			</div>
			<div class="modal-body">
				<p>¿Está seguro de que desea realizar esta operación? Se eliminarán los datos asociados a la reserva.</p>
			</div>
			<div class="modal-footer">
			<style type="text/css">.form-group{ margin-bottom: 0px !important; }</style>
			{{ form(delete_form) }}
			</div>
		</div>
	</div>
</div>
<!-- AQUI FINALIZA EL MODAL -->
/** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **/