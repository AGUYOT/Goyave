<?php

namespace Services\Validation;

class HtmlValidationMode extends ValidationMode
{
    public static $modeName = ValidationModeEnum::HTML;

    public function getModeName() : string
    {
        return HtmlValidationMode::$modeName;
    }

    public function validate(string $code): string/*as GNU error format*/
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://validator.w3.org/nu/?out=json", //online
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => /*$html,*/$code, //'<... your html text to validate ...>'
            CURLOPT_HTTPHEADER => array(
                "User-Agent: Any User Agent",
                //"User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36",
                "Cache-Control: no-cache",
                "Content-type: text/html",
                "charset: utf-8"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err)
        {
            throw new \Exception("HTML Validation CURL Errror : " . $err);
            //handle error here
            //die('sorry etc...');
        }

        //$resJson = json_decode($response, true);

        //($resJson);
        //var_dump($response);
        return $response;

    }

    // TODO : Multiple types
    /*
    HTML with microformat-style class annotations (default output; should not be assumed to be forward-compatibly stable).
    XHTML with microformat-style class annotations (append &out=xhtml to URL; should not be assumed to be forward-compatibly stable).
    XML (append &out=xml to URL).
    JSON (append &out=json to URL).
    GNU error format (append &out=gnu to URL).
    Human-readable plain text (append &out=text to URL; should not be assumed to be forward-compatibly stable for machine parsing—use the GNU format for that).
    */

}