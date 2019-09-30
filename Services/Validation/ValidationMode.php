<?php

namespace Services\Validation;

abstract class ValidationMode
{
    public static $modeName;

    public abstract function getModeName() : string;

    public abstract function validate(string $code) : string /*as GNU error format*/;

}