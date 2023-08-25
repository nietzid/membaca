<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function login(): string
    {
        return view('login');
    }

    public function loggingIn()
    {
        $username = $this->request->getVar('username');
        $kelas = $this->request->getVar('kelas');
        $data = [
            'nama' => $username,
            'kelas' => $kelas,
            'level' => 'A',
            'score' => 0
        ];
        $auth = new AuthModel;
        $userData = $auth->where('nama',$username)->first();
        if($userData){
            $this->session->set($userData);
        }else{
            $auth->insert($data);
            $this->session->set($data);
        }
        session()->set('isLoggedIn', true);
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
