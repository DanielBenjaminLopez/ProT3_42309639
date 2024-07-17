<?php

namespace App\Controllers;

use App\Models\usuario_model;

class Home extends BaseController
{
    //public function index(): string
    // {
    //return view('front/head_view');
    //return view('front/principal');
    //return view('front/footer_view');
    //}
    public function index(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'BEVIMAX';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $principalView = view('front/principal');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $principalView . $footerView;
    }

    public function acerca_de(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'ACERCA DE';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $acerca_deView = view('front/acerca_de');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $acerca_deView . $footerView;
    }


    public function quienes_somos(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'QUIENES SOMOS';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $quienes_somosView = view('front/quienes_somos');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $quienes_somosView . $footerView;
    }

    public function registro(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'REGISTRO';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $registroView = view('back/usuario/registro');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $registroView . $footerView;
    }

    public function login(): string
    {
        // Concatenar las vistas en una sola cadena de texto
        $data['titulo'] = 'LOGIN';
        $headView = view('front/head_view', $data);
        $navbarView = view('front/navbar_view');
        $loginView = view('back/usuario/login');
        $footerView = view('front/footer_view');

        // Devolver la concatenación de todas las vistas
        return $headView . $navbarView . $loginView . $footerView;
    }
}
