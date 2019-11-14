<?php

namespace Services\Validation;

abstract class ValidationMode
{
    public static $modeName;

    public $enabled;

    public function isEnabled() : bool
    {
        return $this->enabled;
    }

    public function __construct($enabled)
    {
        $this->enabled = $enabled;
    }

    public abstract function validate(string $code) : string /*as GNU error format*/;

}