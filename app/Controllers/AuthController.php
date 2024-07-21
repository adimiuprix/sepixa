<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = $this->validation;

            $validation->setRules([
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return view('auth/login', [
                    'validation' => $validation->getErrors()
                ]);
            }

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new User();

            $user = $userModel->where('email', $email)->first();

            if (!$user || !password_verify($password, $user['password'])) {
                return view('auth/login', [
                    'error' => 'Email atau password salah.'
                ]);
            }

            $session = $this->session;
            $session->set('user_id', $user['id']);
            $session->set('email', $user['email']);
            $session->set('logged_in', true);

            return redirect()->to('/dashboard'); // Ubah ke rute yang sesuai
        }

        return view('auth/login');
    }
}
