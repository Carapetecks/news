<?php


namespace Core;

use Core\ServiceController as Serv;

class AuthClass
{
    public static function logIn(){
        if (isset($_POST['btnLogin'])){
            $login=$_POST['login'];
            $password=$_POST['password'];
            if ($login=='admin' && $password=='admin'){
                $_SESSION['userName']=$login;
                Serv::showAlert('Welcome - '.$login);
                Serv::goUri('/admin/dashboard');
            }else{
                Serv::showAlert( 'Login or Password incorrect!!!');
                Serv::goUri('/admin/dashboard');
            }
        }
    }
    public static function logOut()
    {
        unset($_SESSION['userName']);
        Serv::goUri('/');

    }
    public static function checkAuth(){
        if (isset($_SESSION['userName'])&& !empty( $_SESSION['userName'])){
            return $_SESSION['userName'];
        }else{
            return false;
        }
    }

}