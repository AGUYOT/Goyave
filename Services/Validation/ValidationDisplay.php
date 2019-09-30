<?php
/**
 * Created by PhpStorm.
 * User: TBG
 * Date: 30/09/2019
 * Time: 16:53
 */

namespace Services\Validation;


class ValidationDisplay
{
    public static function init() : void
    {
        ob_start();
    }

    public static function render() : void
    {
        $html = ob_get_clean();
        $validationTemplate = file_get_contents('../Services/Validation/Validation.template.php');

        $validation = new Validation($html);
        $validationResults = $validation->handle();

        foreach (ValidationModeEnum::getAvailableValues() as $modeValue)
        {
            if(isset($validationResults[$modeValue]))
            {

                // TODO : MAKE IT WORK

                $validationTemplate = str_replace
                (
                    $validationResults[$modeValue], //search
                    ValidationModeEnum::getNameByValue($modeValue), //replace
                    $validationTemplate //subject
                );
            }
        }

        echo $html . $validationTemplate;
    }
}