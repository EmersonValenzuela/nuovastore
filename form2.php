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
				<form
					class="needs-validation-form form-contact"
					novalidate
					method="post"
					action="send-0.php"
					onsubmit="return validateForm()"
				>
					<div class="grid-50" style="width: 100%">
						<div class="item-form-input">
							<!-- <label for="validationCustom01">Nombres:</label> -->
							<input
								type="text"
								id="input-name-fixed"
								name="userName"
								placeholder="NOMBRES"
								required
							/>
						</div>
						<div class="item-form-input">
							<!-- <label for="validationCustom04 exampleFormControlTextarea1">Email:</label> -->
							<input
								type="email"
								min="0"
								id="input-email-fixed"
								name="userEmail"
								placeholder="EMAIL"
								required
							/>
						</div>
					</div>
					<div class="grid-50" style="width: 100%">
						<div class="item-form-input">
							<!-- <label for="validationCustom03 exampleFormControlTextarea1">Teléfono:</label> -->
							<input
								type="number"
								min="0"
								id="input-phone-fixed"
								name="userPhone"
								placeholder="CELULAR"
								required
							/>
						</div>
						<div class="item-form-input">
							<!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
							<input
								type="text"
								min="0"
								id="input-issue-fixed"
								name="userIssue"
								placeholder="ASUNTO"
								required
							/>
						</div>
					</div>

					<div class="grid-100">
						<div class="item-form-input">
							<!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
							<textarea
								type="text"
								min="0"
								id="input-message-fixed"
								name="userMessage"
								placeholder="MENSAJE"
								required
							></textarea>
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