<?php

namespace Services\Security;

use Services\SecurityUtils\Crypt;
use Services\Security\Model\User;

class Auth
{
    public function login()
    {
        $securityConfig = json_decode(file_get_contents("../Config/security.json"));
        $users = json_decode(file_get_contents("../Config/users.json"));
        $crypt = new Crypt();

        $user_name = $_POST[$securityConfig->{'user_name'}];
        $user_mdp = $_POST[$securityConfig->{'user_mdp'}];
        for($i=0; $i < sizeof($users->{'users'}); $i++)
        {
            $user = $users->{'users'}[$i];
            if($user->{'user'} == $user_name && password_verify($user_mdp, $user->{'pwd'}))
            {
                session_start();
                $token = bin2hex(random_bytes(32));;
                setcookie("sessionid", $token, time()+$securityConfig->{'session_time'}, '/');
                $_SESSION[$token] = new User($user->{'id'}, $user->{'user'},  $user->{'role'});
            }
        }
    }

    public function logout()
    {
        session_start();
        if(isset($_COOKIE["sessionid"]))
        {
            $token = $_COOKIE["sessionid"];
        }
        if (isset($_SESSION[$token])) {
            unset($_SESSION[$token]);
            unset($_COOKIE["sessionid"]);
        }
    }

    public function isAuthenticated()
    {
        session_start();
        if(isset($_COOKIE["sessionid"]))
        {
            $token = $_COOKIE["sessionid"];
        } else 
        {
            return false;
        }
        if (isset($_SESSION[$token])) {
            return true;
        }
        return false;
    }
}