<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Modificación de Clientes</h2>
                </div>
                <div class="card-body m-4">
                    <?php $validation = \Config\Services::validation(); ?>
                    <!-- /enviar-form debe ejecutar una funcion en un controlador;) -->
                    <form method="post" action="<?php echo base_url('update/' . $dato['id_usuario']) ?>">

                        <!--necesario para saber qque es un metodo put;) -->
                        <input type="hidden" name="_method" value="put">

                        <div class="mb-3">
                            <label for="id_usuario" class="form-label">ID</label>
                            <input value="<?= $dato['id_usuario']; ?>" disabled name="id_usuario" type="text" class="form-control" id="id_usuario" placeholder="" required>

                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input value="<?= $dato['nombre']; ?>" name="nombre" type="text" class="form-control" id="nombre" placeholder="Juan" required>
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
                            <input value="<?= $dato['apellido']; ?>" name="apellido" type="text" class="form-control" id="apellido" placeholder="Pérez" required>
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
                            <input value="<?= $dato['usuario']; ?>" name="usuario" type="text" class="form-control" id="usuario" placeholder="Juan2323" required>
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
                            <input value="<?= $dato['email']; ?>" name="email" type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
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

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar modificación</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancelar</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted p-2"> </small>
                </div>
            </div>
        </div>
    </div>
</div>