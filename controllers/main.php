<?php

class Main extends SessionController
{
    public function __construct() 
    {
        error_log('main antes de construct');
        parent::__construct();
        error_log('main despues de construct');
    }

    public function render()
    {
        $this->view->render('main/index', []);
    }

    public function authenticate()
    {
        if ($this->existPOST(['username', 'password'])) 
        {
            $username = $this->getPost('username');
            $password = $this->getPost('password');

            if(($username == '' || empty($username)) || ($password == '' || empty($password)))
            {
                $this->redirect('',
                [
                    'error' => Errors::ERROR_LOGIN_AUTHENTICATE_EMPTY
                ]);
            }

            $user = $this->model->login($username, $password);

            if ($user != NULL)
            {
                $this->initialize($user);
            }
            else
            {
                $this->redirect('',
                [
                    'error' => Errors::ERROR_LOGIN_AUTHENTICATE_DATA
                ]);
            }
        }
        else
        {
            $this->redirect('',
                [
                    'error' => Errors::ERROR_LOGIN_AUTHENTICATE
                ]);
        }
    }

    public function newUser()
    {
        if($this->existPOST(['username', 'password', 'idrole']))
        {
            $username = $this->getPost('username');
            $password = $this->getPost('password');
            $role = $this->getPost('role');
            
            $user = new UserModel();

            $user->setUsername($username);
            $user->setSecretPassword($password, true);
            $user->setIdRole($role);
            
            if(($username == '' || empty($username)) || ($password == '' || empty($password)) || ($role == '' || empty($role)))
            {
                $this->redirect('signup',
                [
                    'error' => Errors::ERROR_SIGNUP_NEWUSER_EMPTY
                ]);
            }
            elseif ($user->exists($username))
            {
                $this->redirect('signup',
                [
                    'error' => Errors::ERROR_SIGNUP_NEWUSER_EXISTS
                ]);
            }
            elseif($user->save())
            {
                $this->redirect('',
                [
                    'success' => Success::SUCCESS_SIGNUP_NEWUSER
                ]);
            }
            else
            {
                $this->redirect('signup',
                [
                    'error' => Errors::ERROR_SIGNUP_NEWUSER
                ]);
            }
        }
        else
        {
            $this->redirect('signup', 
            [
                'error' => Errors::ERROR_SIGNUP_NEWUSER_EXISTS
            ]);
        }
    }
}


?>