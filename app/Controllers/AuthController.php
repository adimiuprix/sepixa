<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function login()
    {
        $session = $this->session;

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
                return view('auth/login', compact('session'));
            }

            $session = $this->session;
            $session->set('user_id', $user['id']);
            $session->set('email', $user['email']);
            $session->set('logged_in', true);

            return redirect()->to('dashboard'); // Ubah ke rute yang sesuai
        }

        return view('auth/login', compact('session'));
    }

    public function register()
    {
        $session = $this->session;

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'username' => [
                    'rules' => 'required|trim|min_length[3]|max_length[255]',
                    'errors' => [
                        'required' => 'Name is required.',
                        'trim' => 'Name should not contain leading or trailing spaces.',
                        'min_length' => 'Name must be at least 3 characters long.',
                        'max_length' => 'Name cannot exceed 255 characters.',
                    ]
                ],
                'email' => [
                    'rules' => 'required|trim|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'Email is required.',
                        'trim' => 'Email should not contain leading or trailing spaces.',
                        'valid_email' => 'Please provide a valid email address.',
                        'is_unique' => 'This email address is already registered.',
                    ]
                ],
                'password' => [
                    'rules' => 'required|trim|min_length[8]',
                    'errors' => [
                        'required' => 'Password is required.',
                        'trim' => 'Password should not contain leading or trailing spaces.',
                        'min_length' => 'Password must be at least 8 characters long.',
                    ]
                ],
                'password_confirm' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'Password confirmation is required.',
                        'matches' => 'Password confirmation does not match the password.',
                    ]
                ]
            ];

            if (!$this->validate($validationRules)) {
                return $this->response->setJSON([
                    'success' => false,
                    'errors' => $this->validator->getErrors()
                ]);
            }

            $userModel = new User();
            $userData = $this->request->getPost(['username', 'email', 'password']);
            $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);

            $userModel->insert($userData);

            return redirect()->back()->to('auth/register');
        }

        return view('auth/register', compact('session'));
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('login');
    }
}
