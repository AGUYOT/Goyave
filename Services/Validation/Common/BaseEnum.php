<?php

/**
 * Reusable Class/Helper for Enums in PHP
 * @source: https://www.maxpou.fr/dealing-with-enum-symfony-doctrine
 */

namespace Services\Validation\Common;

abstract class BaseEnum
{
//    protected static $readableName; /* = [
//        self::CONSTANT  => 'Value',
//        self::CONSTANT  => 'Value',
//        self::CONSTANT  => 'Value',
//        self::CONSTANT  => 'Value',
//        self::CONSTANT  => 'Value',
//        //self::...     => '...',
//    ];*/

    /**
     * @return string[]
     */

    public static function getAvailableValues()
    {
        return self::getAvailableConstantList();
    }

    /**
     * @param $constantName - value to check
     * @return bool
     */
    public static function isValidName($constantName)
    {
        $availableConstList = self::getAvailableConstantList();
        return isset($availableConstList[$constantName]);
    }

    /**
     * @param $constantValue - value to check
     * @return bool
     */
    public static function isValidValue($constantValue)
    {
        $availableConstList = self::getAvailableConstantList();
        return array_search($constantValue, $availableConstList, true) !== false;
    }

    /**
     * returns a array with available constants
     * @return array|null
     */
    private static function getAvailableConstantList()
    {
        return (new \ReflectionClass(static::class))->getConstants();
    }

    /**
     *
     *
     */
    public static function getNameByValue($value)
    {
        if(self::isValidValue($value)) {

            $availableConstList = self::getAvailableConstantList();
            return array_search($value, $availableConstList);

        }
        else { throw new \UnexpectedValueException('Unknown value given'); } //TODO Improve
    }
}