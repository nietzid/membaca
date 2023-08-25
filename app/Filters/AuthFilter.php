<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $loggedIn = session('isLoggedIn');
        // Check if the user is authenticated or has required permissions
        if ( $loggedIn != true ) {
            return redirect()->to('/login'); // Redirect unauthorized users to the login page
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}
