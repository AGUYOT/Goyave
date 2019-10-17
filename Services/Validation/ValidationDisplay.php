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
        //$html = ob_get_contents();
        //ob_end_clean();
        $validationTemplate = file_get_contents('../Services/Validation/Validation.template.php');

//        echo '<pre>';
//        echo htmlspecialchars($html);
//        echo '</pre>';

        $validation = new Validation($html);
        $validationResults = $validation->handle();

        foreach (ValidationModeEnum::getAvailableValues() as $modeValue)
        {

            if(isset($validationResults[$modeValue]))
            {

                $validationTemplate = str_replace
                (
                    ValidationModeEnum::getShortName($modeValue), //search (string to replace)
                    htmlspecialchars($validationResults[$modeValue]), //replace (replacement string)
                    //ValidationResultParser::parse(ValidationResultModeEnum::JSON, /*htmlspecialchars(*/$validationResults[$modeValue]/*)*/), //replace (replacement string)
                    $validationTemplate //subject (string to modify)
                );
            }
        }

        echo $html . $validationTemplate;
    }
}