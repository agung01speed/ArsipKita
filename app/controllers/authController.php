<?php

require_once '../app/models/user.php'; 

class authController{
    public function showLogin(){ //ini untuk login
        require '../app/views/auth/login.php';
    }

    public function login(){ //untuk mengirimkan data yang sudah di input
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new user();
        $user = $userModel->findByUsername($username);

        if (!$user) {
            echo "Username tidak ditemukan";
            return;
        }

        if (!password_verify($password, $user['password'])) {
            echo "Password salah";
            return;
        }

        $_SESSION['user_id'] = $user['id_user'];

        header('Location: /arsipkita/dashboard');
        exit;   
    }

    public function showRegister(){ //ini untuk register
        require '../app/views/auth/register.php';
    }

    public function register(){ //mengirimkan inputan register
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['password_confirm'];

        if($password !== $passwordConfirm){
            echo "Password tidak cocok";
            return;
        }

        $userModel = new user();
        $user = $userModel->findByUsername($username);

        if($user){
            echo "Username sudah ada";
            return;
        }

        $userModel->create($username, $password);
        header('Location: /arsipkita/login');
        exit;
    }       
}