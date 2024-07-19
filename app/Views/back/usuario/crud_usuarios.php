<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-4 p-2">
                <div class="card-header text-center">
                    <h2>Usuarios</h2>
                </div>
                <div class="card-body m-8">
                    <table class="table table-striped table-hover border border-dark-subtle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Email</th>
                                <th scope="col">Baja</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($datos) && is_array($datos)) : ?>
                                <?php foreach ($datos as $usuario) : ?>
                                    <?php if ($usuario['perfil_id'] == 2) : ?>
                                        <tr>
                                            <td><?= esc($usuario['id_usuario']) ?></td>
                                            <td><?= esc($usuario['nombre']) ?></td>
                                            <td><?= esc($usuario['apellido']) ?></td>
                                            <td><?= esc($usuario['usuario']) ?></td>
                                            <td><?= esc($usuario['email']) ?></td>
                                            <td><?= esc($usuario['baja']) ?></td>
                                            <td>
                                                <a href="<?= site_url('edit/' . $usuario['id_usuario']) ?>" class="btn btn-primary btn-sm">Editar</a>
                                                <!-- Formulario para eliminar -->
                                                <form action="<?= base_url('delete/' . $usuario['id_usuario']) ?>" method="post" style="display:inline;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>
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

                    <div class="card-footer text-center">
                        <small class="text-muted">¿Desea registrar un nuevo usuario? <a href="registro" class="btn btn-primary btn-sm ">Registrar</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>