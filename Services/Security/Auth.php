<?php

namespace Services\Security;

use Services\SecurityUtils\Crypt;

class Auth
{
    public function login()
    {
        $securityConfig = json_decode(file_get_contents("../Config/security.json"));
        $users = json_decode(file_get_contents("../Config/users.json"));
        $crypt = new Crypt();

        $user_name = "admin"; //$_POST[$securityConfig->{'user_name'}];
        $user_mdp = "teest"; //$crypt->HashPassword($_POST[$securityConfig->{'user_mdp'}]);
        var_dump($user_mdp);
        for($i=0; $i < sizeof($users->{'users'}); $i++)
        {
            $user = $users->{'users'}[$i];
            if($user->{'user'} == $user_name && password_verify($user_mdp, $user->{'pwd'}))
            {
                var_dump("Access granted");
                return;
            }
        }
        var_dump("Access denied");
    }
}