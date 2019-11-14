<?php
/**
 * Created by PhpStorm.
 * User: TBG
 * Date: 17/10/2019
 * Time: 15:03
 */

namespace Services\Validation;


class ValidationResultParser
{
    public static function parse(string $validationResultMode, string $input)
    {
        switch($validationResultMode)
        {
            case ValidationResultModeEnum::GNU:
                return self::parseFromGNU($input);
                break;

            case ValidationResultModeEnum::JSON:
                return self::parseFromJSON($input);
                break;

            default:
                //return $input;
                throw new \Exception("Unknown Validation Result Mode !");
                break;
        }
    }

    private static function parseFromJSON(string $input) : array
    {
        $results = array();
        $inputJson = json_decode($input, true);

        foreach ($inputJson["messages"] as $ar)
        {

            $resultElement = new ValidationResult(
                intval($ar["type"]),
                $ar["message"],
                $ar["extract"],
                $ar["lastLine"], //$ar["firstLine"],
                $ar["firstColumn"],
                $ar["lastLine"],
                $ar["lastColumn"]
            );

            array_push($results, $resultElement);
        }

        return $results;

    }

    private static function parseFromGNU(string $input) : array
    {
        $results = array("TODO TODO TODO TODO"); // TODO GNU
//        $inputJson = json_decode($input, true);
//
//        foreach ($inputJson["messages"] as $ar)
//        {
//            $resultElement = new ValidationResult(
//                $ar["type"],
//                $ar["message"],
//                $ar["extract"],
//                $ar["firstLine"],
//                $ar["firstColumn"],
//                $ar["lastLine"],
//                $ar["lastColumn"]
//            );
//
//            array_push($results, $resultElement);
//        }

        return $results;

    }
}