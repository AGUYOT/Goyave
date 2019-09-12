<?php
/**
 * Created by PhpStorm.
 * User: TBG
 * Date: 12/09/2019
 * Time: 16:51
 */

namespace Services\Validation;


class HtmlValidationMode extends ValidationMode
{

    public static $codeName = "HTML";

    public function validate(string $code): string /*as GNU error format*/
    {
        // TODO: Implement validate() method.
        //return exec ( 'java -jar myfile.jar > output.xml' );
        return exec ( "java -Dnu.validator.client.host=192.168.99.100 -Dnu.validator.client.out=gnu -cp vnu.jar nu.validator.client.HttpClient $code" );
    }

}