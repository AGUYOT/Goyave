<?php
/**
 * Created by PhpStorm.
 * User: TBG
 * Date: 17/10/2019
 * Time: 15:15
 */

namespace Services\Validation;


class ValidationResult
{

    public $type;
    public $message;
    public $extract;
    public $boundaries;

//    public function __construct(int $type, string $message, string $extract, array $boundaries)
//    {
//        $this->type = $type;
//        $this->message = $message;
//        $this->extract = $extract;
//        $this->boundaries = $boundaries;
//    }

    public function __construct(int $type, string $message, string $extract, int $firstLine, int $firstColumn, int $lastLine, int $lastColumn)
    {
        $this->type = $type;
        $this->message = $message;
        $this->extract = $extract;
        $this->boundaries = array($firstLine, $firstColumn, $lastLine, $lastColumn);
    }

}