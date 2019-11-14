<?php

/**
 * Enum for Validation Modes (based on BaseEnum)
 * @source: https://www.maxpou.fr/dealing-with-enum-symfony-doctrine
 */

namespace Services\Validation;

use Common\BaseEnum;

class ValidationModeEnum extends BaseEnum
{
    const HTML = "HTML Validation";
    const CSS = "CSS Validation";
    const ARIA = "Accessibility Validation";
    //const XXXX_...    = "..."   // ...

    /** @var array user friendly named type */
    protected static $readableName = [
        self::HTML  => "{{html_content}}",
        self::CSS   => "{{css_content}}",
        self::ARIA  => "{{aria_content}}",
        //self::ROLE_...    => '...',
    ];

//    /**
//     * @param  string value
//     * @return string $readableName
//     */
    public static function getShortName($value)
    {

        //$readableNameProperty = (new \ReflectionClass(static::class))->getProperty("readableName");

        if(self::isValidValue($value)) {

            $availableValues = self::getAvailableValues();

            //return self::$readableNameProperty[$availableRoles[$role]];
            return self::$readableName[$value];
            //return self::$readableName[$availableValues[$value]];

        }
        else {
            throw new \UnexpectedValueException('Unknown value given');
        }
    }

}