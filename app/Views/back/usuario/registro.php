<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Registro de Clientes</h2>
                </div>
                <div class="card-body m-4">
                    <?php $validation = \Config\Services::validation(); ?>
                    <!-- /enviar-form debe ejecutar una funcion en un controlador;) -->
                    <form method="post" action="<?php echo base_url('/enviar_form') ?>">
                        <?= csrf_field(); ?>
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-warning"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Juan" required>
                            <!-- ERROR -->
                            <?php
                            if ($validation->getError('nombre')) {
                            ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>
                            <!-- Fin ERROR -->
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Pérez" required>
                            <!-- ERROR -->
                            <?php
                            if ($validation->getError('apellido')) {
                            ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>
                            <!-- Fin ERROR -->
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nombre de usuario</label>
                            <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Juan2323" required>
                            <!-- ERROR -->
                            <?php
                            if ($validation->getError('usuario')) {
                            ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('usuario'); ?>
                                </div>
                            <?php } ?>
                            <!-- Fin ERROR -->
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                            <!-- ERROR -->
                            <?php
                            if ($validation->getError('email')) {
                            ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                            <!-- Fin ERROR -->
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input name="pass" type="password" class="form-control" id="pass" placeholder="" required>
                            <!-- ERROR -->
                            <?php
                            if ($validation->getError('pass')) {
                            ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php } ?>
                            <!-- Fin ERROR -->
                        </div>
                        <!--<div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="" required>
                    </div>-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Ya tienes una cuenta? <a href="login" class="text-primary">Inicia sesión aquí</a></small>
                </div>
            </div>
        </div>
    </div>
</div>