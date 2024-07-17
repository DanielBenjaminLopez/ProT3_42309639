<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//Es solo para ver el usuario logeado
class panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        $dato['titulo'] = 'Panel de Usuario';
        $headView = view('front/head_view', $dato);
        $navbarView = view('front/navbar_view');
        $logView = view('back/usuario/usuario_logeado', $data);
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $logView . $footerView;
    }
}
