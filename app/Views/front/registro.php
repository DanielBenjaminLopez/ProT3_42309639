<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Registro de Clientes FRONT</h2>
                </div>
                <div class="card-body m-4">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Juan" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Pérez" required>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nombre de usuario</label>
                            <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Juan2323" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input name="pass" type="password" class="form-control" id="pass" placeholder="" required>
                        </div>
                        <!--<div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="" required>
                        </div>-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
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