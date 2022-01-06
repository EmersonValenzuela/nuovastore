<style>
	.item-open-form {
		position: fixed;
		width: auto;
		height: auto;
		background: #ed3833;
		padding: 8px 0.7rem;
		color: #fff;
		cursor: pointer;
		top: 17%;
		right: -4.3rem;
		z-index: 999999;
		transform: rotate(-90deg);
		font-weight: 800;
		font-size: 1.3rem;
	}

	.form-contact-container-fixed {
		position: fixed;
		right: 0;
		top: 10%;
		z-index: 999999;
		background-color: rgba(0, 0, 0, 0.77);
		padding: 1rem 1.7rem;
		border-bottom-left-radius: 1rem;
		border-top-left-radius: 1rem;
		display: flex;
		flex-direction: column;
	}

	.form-contact-container-fixed .item-icon-close-form {
		position: absolute;
		top: -11px;
		left: -13px;
		color: #000;
		background: #fff;
		border-radius: 50%;
		width: 2rem;
		height: 2rem;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: -1px 1px 5px #444;
		cursor: pointer;
	}

	.form-contact-container-fixed h1 {
		margin: 0;
	}

	.form-contact-container-fixed h4 {
		margin: 0;
	}

	.form-contact-container-fixed .header-wrapper {
		color: #fff;
	}

	.grid-50 {
		width: 100%;
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-gap: 0.5rem;
		margin-bottom: 0.9rem;
		box-sizing: border-box;
	}

	.grid-100 {
		width: 100%;
		display: grid;
		grid-template-columns: 1fr;
		grid-row-gap: 0.5rem;
		margin-bottom: 0.9rem;
		box-sizing: border-box;
	}

	.form-contact-container-fixed .form-contact {
		padding: 1rem 0;
		box-sizing: border-box;
		position: relative;
	}

	.form-contact-container-fixed .form-contact textarea,
	input {
		width: 100%;
		max-width: 100%;
		border: none;
		border-radius: 0.4rem;
		padding: 0.6rem;
		box-sizing: border-box;
	}

	.item-send-button .btn-send {
		background: #ed3833;
		padding: 8px 1.5rem;
		color: #fff;
		cursor: pointer;
		font-weight: 800;
		font-size: 1.3rem;
		border: none;
		border-radius: 0.7rem;
	}

	.item-send-button .btn-send:hover {
		background: #e9443e;
		transition: all ease-in-out 0.3s;
	}

	.whatsapp-movil {
		display: none;
	}

	.btn-whatsapp {
		border-top-left-radius: 10px;
		border-bottom-left-radius: 10px;
		background: #009345;
		position: fixed;
		right: 0;
		padding: 5px 10px 5px;
		color: white;
		z-index: 1500;
		top: 65%;
		font-size: 18px;
		text-align: center;
		border: 2px solid #fff;
	}

	.btn-whatsapp.btn-atencion {
		border-top-left-radius: 10px;
		border-bottom-left-radius: 10px;
		background: #009345;
		position: fixed;
		right: 0;
		padding: 0 10px;
		color: white;
		z-index: 1500;
		top: 60%;
		font-size: 18px;
		text-align: center;
		border: none;
	}

	.btn-whatsapp.btn-atencion p {
		margin-bottom: 0;
		color: #fff;
	}

	.btn-whatsapp i {
		color: white;
		font-size: 2.8em;
		margin-right: 5px;
	}

	.btn-whatsapp label {
		display: inline-block;
		color: white;
	}

	.btn-whatsapp label span {
		color: white;
		font-size: 22px;
		text-align: center;
	}

	.btn-whatsapp:hover,
	.btn-whatsapp:focus {
		color: white;
	}

	@media only screen and (max-width: 767px) {
		.whatsapp-movil {
			display: block;
		}

		.whatsapp-escritorio {
			display: none;
		}

		.btn-whatsapp i {
			margin-right: 0;
		}

		.header-wrap .logo {
			margin-bottom: 15px;
		}
	}
</style>
<!---BTN OPEN FORM--->
<div class="item-open-form">
	<div>
		<i id="icon-form-contact" class="fa fa-sort-up"></i>
	</div>
	<div>Contáctanos</div>
</div>
<!--**************** start FIXED FORM CONTACT *********************-->
<div class="form-contact-container form-contact-container-fixed">
	<div class="item-icon-close-form">X</div>
	<div class="bg-form-filter"></div>
	<div class="header-wrapper">
		<h1>Consultas y cotizaciones</h1>
		<h4>Comunícate con Nosotros</h4>
	</div>
	<form class="needs-validation-form form-contact" novalidate method="post" action="../send-0.php" onsubmit="return validateForm()">
		<div class="grid-50" style="width: 100%">
			<div class="item-form-input">
				<!-- <label for="validationCustom01">Nombres:</label> -->
				<input type="text" id="input-name-fixed" name="userName" placeholder="NOMBRES" required />
			</div>
			<div class="item-form-input">
				<!-- <label for="validationCustom04 exampleFormControlTextarea1">Email:</label> -->
				<input type="email" min="0" id="input-email-fixed" name="userEmail" placeholder="EMAIL" required />
			</div>
		</div>
		<div class="grid-50" style="width: 100%">
			<div class="item-form-input">
				<!-- <label for="validationCustom03 exampleFormControlTextarea1">Teléfono:</label> -->
				<input type="number" min="0" id="input-phone-fixed" name="userPhone" placeholder="CELULAR" required />
			</div>
			<div class="item-form-input">
				<!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
				<input type="text" min="0" id="input-issue-fixed" name="userIssue" placeholder="ASUNTO" required />
			</div>
		</div>

		<div class="grid-100">
			<div class="item-form-input">
				<!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
				<textarea type="text" min="0" id="input-message-fixed" name="userMessage" placeholder="MENSAJE" required></textarea>
			</div>
		</div>
		<div class="form-item-row" style="width: 100%">
			<div class="item-send-button">
				<button class="btn-send" name="btn-send-message-fixed" type="submit">
					Enviar
				</button>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="../send-1.php" method="POST">
					<div class="form-group">
						<label for="message-text" class="col-form-label">Nombres:</label>
						<input class="form-control" name="userName">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Email:</label>
						<input class="form-control" name="userEmail">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Celular:</label>
						<input class="form-control" name="userPhone">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Producto:</label>
						<input class="form-control" name="userIssue" id="bookId">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Enviar Mensaje</button>
			</div>
		</div>
	</div>
</div>
<div class="whatsapp-escritorio">
	<a class="btn-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=51912151653&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20el%20precio%20de%20sus%20productos" style="background-color: #009345;"><i class="fab fa-whatsapp"></i><label>Atención Inmediata <br>
			<span>912151653</span></label></a>
</div>

<div class="whatsapp-movil">
	<div class="btn-whatsapp btn-atencion">
		<p>Atenci&oacute;n inmediata:</p>
	</div>
	<button class="btn-whatsapp" id="cambiar">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=51912151653&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20el%20precio%20de%20sus%20productos"><i class="fab fa-whatsapp"></i></a>
	</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

<script>
    $(function(){
  $(".open-AddBookDialog").click(function(){
	  var txt = $(this).data('id');
	  document.getElementById('exampleModalLabel').innerHTML = "Consulta De: " + txt;
     $('#bookId').val($(this).data('id'));
    $("#exampleModal").modal("show");
  });
});
</script>