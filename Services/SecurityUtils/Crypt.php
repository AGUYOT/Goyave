<?php

namespace Services\SecurityUtils;

class Crypt
{
    public function HashPassword($passwd)
    {
        return password_hash($passwd, PASSWORD_BCRYPT);
    }
}