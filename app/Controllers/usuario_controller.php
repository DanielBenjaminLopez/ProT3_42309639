<?php

namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        //ACA PUEDE HABER PROBLEMAS PORQUE ES DISTINTO AL VIDEO AUNQUE HARIA LO MISMO
        $data['titulo'] = 'backREGISTRO_back';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $registroView = view('back/usuario/registro');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $registroView . $footerView;
    }

    public function crud_usuarios(): string
    {
        $model = new usuario_model();
        $datos = $model->getUsuarios();
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'CRUD';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $crud_usuariosView = view('back/usuario/crud_usuarios', compact('datos'));
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $crud_usuariosView . $footerView;
    }

    public function edit($id)
    {
        $model = new usuario_model();
        $dato = $model->getUsuario($id);
        $data['titulo'] = 'Editar';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $editView = view('back/usuario/edit', compact('dato'));
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $editView . $footerView;
    }

    public function update($id = null)
    {
        $input = $this->validate(
            [
                'id_usuario' => 'required',
                'nombre' => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email',
                'baja' => 'required'
            ]
        );

        if (!$input) {
            $data['titulo'] = 'ErrorUpdate';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro');
            echo view('front/footer_view');
            return;
        }

        $post = $this->request->getPost(['id_usuario', 'nombre', 'apellido', 'usuario', 'email', 'baja']);
        $usuarioModel = new usuario_model();

        if ($usuarioModel->update($id, $post)) {
            return redirect()->to(base_url('crud_usuarios'));
        } else {
            $data['titulo'] = 'ErrorUpdate';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro');
            echo view('front/footer_view');
        }
    }


    public function delete($id = null)
    {
        if (!$this->request->is('delete') || $id == null) {
            $data['titulo'] = 'ErrorDelete';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro');
            echo view('front/footer_view');
            return;
        }
        $usuarioModel = new usuario_model();
        $usuarioModel->delete($id);
        return redirect()->to(base_url('crud_usuarios'));
    }


    public function formValidation()
    {
        $input = $this->validate(
            [
                'nombre' => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'usuario' => 'required|min_length[3]',
                'email' => [
                    'rules' => 'required|valid_email|is_unique[usuarios.email]',
                    'errors' => [
                        'required' => 'El campo de correo electrónico es obligatorio.',
                        'valid_email' => 'Debe ingresar un correo electrónico válido.',
                        'is_unique' => 'El correo electrónico ya está registrado.'
                    ]
                ],
                'pass' => 'required|min_length[3]|max_length[100]',

            ],
        );
        $formModel = new usuario_model();

        if (!$input) {
            //Muestra error
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            //Guarda
            $formModel->save([
                //this request trae del formulario, lo que ponemos a la derecha tiene que coincidir con el formulario
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                //Password_Hash crea un nuevo hash de contraseña usando un algoritmo de encriptación

            ]);
            //flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga
            session()->setFlashdata('success', 'Usuario registrado con exito');
            //return $this->response->redirect('/panel');
            //ACA CAMBIÉ EL RETURN PORQUE NO FUNCIONABA LA REDIRECCIÓN
            return redirect()->to('registro');
        }
    }
}
