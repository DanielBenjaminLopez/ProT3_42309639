<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface as FiltersFilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FilterInterface;

class Auth implements FiltersFilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //si el usuario esta logeado
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
