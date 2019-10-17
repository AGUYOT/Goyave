<?php

namespace Services\Validation;

class Validation
{
    private $code;
    private $validationModes;

    public function __construct($code)
    {
        $this->code = $code;

        $this->validationModes = [
            HtmlValidationMode::$modeName => new HtmlValidationMode(),
            //CssValidationMode::$modeName => new CssValidationMode(),
            //AccessibilityValidationMode::$codeName => new AccessibilityValidationMode(),
        ];
    }

    function handle() : array
    {
        $validationResults = [];

        if(isset($this->validationModes))
        {
            if(empty($this->validationModes) == false)
            {
                foreach ($this->validationModes as $mode)
                {
                    try
                    {
                        $validationResults[$mode->getModeName()] = $mode->validate($this->code);
                    }
                    catch(\Exception $ex)
                    {
                        throw new \Exception("Validation error !" . $ex->getMessage());
                    }
                }
            }
        }
        else
        {
            throw new \Exception("Validation modes not defined !");
        }

        return $validationResults;
    }
}