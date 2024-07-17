<?php

namespace App\Controllers;

use App\Models\usuario_model;
use App\Models\usuarios_model;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        //ACA PUEDE HABER PROBLEMAS PORQUE ES DISTINTO AL VIDEO AUNQUE HARIA LO MISMO
        $data['titulo'] = 'backLogin';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $loginView = view('back/usuario/login');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $loginView . $footerView;
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        //traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }
            //Se verifican los datos ingresados para iniciar, si cumple verificación inicia la sesion
            $verify_pass = password_verify($password, $pass);
            //$pass es el de la tabla pero no entiendo como :/
            //password_verify determina los requisitos de configuración de contraseña
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE,

                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', 'BIENVENIDO!'); //se muestra en el login
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Password incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email no registrado');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
