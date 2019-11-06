<?php

namespace Services\Validation;

class AriaValidationMode extends ValidationMode
{
    public static $modeName = ValidationModeEnum::ARIA;

    public function getModeName() : string
    {
        return AriaValidationMode::$modeName;
    }

    public function validate(string $code): string/*as GNU error format*/
    {

        $response = "TODO :)";

        // TODO : ARIA Validation

        return $response;

    }


}