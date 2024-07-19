<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-4 p-2">
                <div class="card-header text-center">
                    <h2>Usuarios</h2>
                </div>
                <div class="card-body m-8">
                    <table class="table table-striped table-hover border border-dark-subtle  ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellido</th>
                                <th scope="col">usuario</th>
                                <th scope="col">email</th>
                                <th scope="col">baja</th>
                                <th scope="col">acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datos) && is_array($datos)) : ?>
                                <?php foreach ($datos as $usuario) : ?>
                                    <?php if ($usuario['perfil_id'] == 2) : ?>
                                        <tr>
                                            <td><?= $usuario['id_usuario'] ?></td>
                                            <td><?= $usuario['nombre'] ?></td>
                                            <td><?= $usuario['apellido'] ?></td>
                                            <td><?= $usuario['usuario'] ?></td>
                                            <td><?= $usuario['email'] ?></td>
                                            <td><?= $usuario['baja'] ?></td>
                                            <td>
                                                <!-- Aca hago el ruteo "directo" y le paso el dato-->

                                                <a href="<?= site_url('edit/' . $usuario['id_usuario']) ?>">editar</a>
                                                <a href="">eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7">No hay usuarios registrados</td>
                                </tr>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">¿Desea registrar un nuevo usuario? <a href="registro" class="text-primary">Registrar</a></small>
                </div>
            </div>
        </div>
    </div>
</div>