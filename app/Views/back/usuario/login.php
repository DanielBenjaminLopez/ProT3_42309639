<div class="container my-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">
					<h2>Iniciar sesión</h2>
				</div>
				<div class="card-body">

					<!-- ERROR -->
					<?php if (session()->getFlashdata('msg')) : ?>
						<div class='alert alert-warning mt-2'>
							<?= session()->getFlashdata('msg'); ?>
						</div>
					<?php endif; ?>
					<!-- Fin ERROR -->
					<form method="post" action="<?php echo base_url('/enviar_login') ?>">
						<div class="mb-3">
							<label for="email" class="form-label">Correo electrónico</label>
							<div class="input-group">
								<span class="input-group-text">@</span>
								<input name="email" type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
							</div>
						</div>
						<div class="mb-3">
							<label for="pass" class="form-label">Contraseña</label>
							<input name="pass" type="password" class="form-control" id="pass" required>
						</div>
						<div class="d-flex justify-content-between text-center">
							<a href="#" class="text-decoration-none">Olvidé mi contraseña</a>
							<button type="submit" class="btn btn-primary">Iniciar sesión</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>