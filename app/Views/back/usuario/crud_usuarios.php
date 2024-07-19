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


                                                <a href="<?= site_url('edit/' . $usuario['id_usuario']) ?>" class="btn btn-primary btn-sm">Editar</a>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-url="<?= base_url('delete/' . $usuario['id_usuario']) ?>">EIiminar</button>
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
                        <small class="text-muted">¿Desea registrar un nuevo usuario? <a href="registro" class="text-primary">Registrar</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <form id="form-elimina" action="" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->section('script'); ?>
    <script>
        const eliminaModal = document.getElementById('eliminaModal')
        if (eliminaModal) {
            eliminaModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget
                // Extract info from data-bs-* attributes
                const id = button.getAttribute('data-bs-id')

                // Update the modal's content.
                const form = eliminaModal.querySelector('#form-elimina')
                form.setAttribute('action', 'elimina.html?id=' + id)
            })
        }
    </script>
    <?= $this->endSection(); ?>