<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('vista', 'Controlador::función');
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

$routes->get('crud_usuarios', 'usuario_controller::crud_usuarios');
$routes->get('edit/(:num)', 'usuario_controller::edit/$1');

//probando- esto deberia ser post
//$routes->put('update/(:num)', 'usuario_controller::update/$1');
$routes->put('update/(:num)', 'usuario_controller::update/$1');
$routes->delete('delete/(:num', 'usuario_controller::delete/$1');


//rutas del Registro de usuarios
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar_form', 'usuario_controller::formValidation');

//login
$routes->get('/login', 'login_controller');
$routes->post('/enviar_login', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
