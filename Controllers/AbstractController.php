<?php

namespace Controllers;

interface AbstractController
{
    function index();

    function render($view, $data);
}