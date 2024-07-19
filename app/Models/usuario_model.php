<?php

namespace App\Models;

use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'usuarios'; //nombre de la tabla
    protected $primaryKey = 'id_usuario'; //identificador de la tabla
    protected $allowedFields = [
        'id_usuario',
        'nombre', 'apellido', 'usuario', 'email',
        'pass', 'perfil_id', 'baja'
    ]; //todos los campos de la tabla

    public function getUsuarios()
    {
        return $this->findAll();
    }
    public function getUsuario($id)
    {
        return $this->where('id_usuario', $id)->first($id);
    }
}
