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

        // Variables : Templates
        $templatePath = "../Services/Validation/Templates/";
        $validationTemplate = file_get_contents($templatePath . 'all.validation.template.html');
        $buttonTemplate = file_get_contents($templatePath . 'button.validation.template.html');
        $popupTemplate = file_get_contents($templatePath . 'popup.validation.template.html');

        // Variables : Generated code storage
        $buttons = "";
        $popups = "";

        // Variables : Validation
        $validation = new Validation($html);
        $validationResults = $validation->handle();

        foreach (ValidationModeEnum::getAvailableValues() as $modeValue)
        {
            if(isset($validationResults[$modeValue]))
            {
                // Results
                $modeName = ValidationModeEnum::getNameByValue($modeValue);
                $enabled = $validation->isEnabled($modeValue) ? "" : "disabled";

                // TODO V1 : Get result as arrays (warnings, errors) => Display error one by one, display counters
                //

                // TODO V2 : Get result as custom class => Display line, position, message, type, etc
                //

                // Generate button
                $tempButton = $buttonTemplate;
                //            str_replace(STRING_TO_REPLACE, REPLACEMENT_STRING, STRING_TO_MODIFY);
                $tempButton = str_replace("{{_NAME_}}", $modeName, $tempButton);
                $tempButton = str_replace("{{_DISABLED_}}", $enabled, $tempButton);
                $tempButton = str_replace("{{_COUNTER_WARNING_}}", "X", $tempButton);
                $tempButton = str_replace("{{_COUNTER_ERROR_}}",  "X", $tempButton);

                // Add to buttons
                $buttons .= $tempButton;

                // Generate popup
                $tempPopup = $popupTemplate;
                //           str_replace(STRING_TO_REPLACE, REPLACEMENT_STRING, STRING_TO_MODIFY);
                $tempPopup = str_replace("{{_NAME_}}", $modeName, $tempPopup);
                $tempPopup = str_replace("{{_RESULT_}}", htmlspecialchars($validationResults[$modeValue]), $tempPopup);

                // Add to popups
                $popups .= $tempPopup;
            }
        }

        // Add buttons/popups to template
        //str_replace(STRING_TO_REPLACE, REPLACEMENT_STRING, STRING_TO_MODIFY);
        $validationTemplate = str_replace("{{_BUTTONS_}}", $buttons, $validationTemplate);
        $validationTemplate = str_replace("{{_POPUPS_}}" , $popups , $validationTemplate);

        // Add template to page code
        echo $html . $validationTemplate;
    }
}