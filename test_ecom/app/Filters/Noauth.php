<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('isLoggedIn'))
        {
            redirect()->to('/Dashboard');
        }
        // $auth = service('auth');

        // if (!session()->get('isLoggedIn')) 
        // {
        //     return redirect()->to(site_url('/Dashboard'));
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}