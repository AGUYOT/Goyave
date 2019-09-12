<?php

namespace Services\Validation;

use Controllers\BaseController;

class Validation
{
    private $code;
    private $validationModes;

    public function __construct($code)
    {
        $this->code = $code;

        $this->validationModes = [
            HtmlValidationMode::$codeName => new HtmlValidationMode(),
            //CssValidationMode::$codeName => new CssValidationMode(),
            //AccessibilityValidationMode::$codeName => new AccessibilityValidationMode(),
        ];
    }

    function handle() : string
    {
        if(isset($this->validationModes))
        {
            if(empty($this->validationModes) == false)
            {
                foreach ($this->validationModes as $mode)
                {
                    return $mode->validate($this->code);
                }
            }
        }
        else
        {
            throw new \Exception("Validation modes not defined !");
        }
    }
}