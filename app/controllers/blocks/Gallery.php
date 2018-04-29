<?php

namespace App;

use Sober\Controller\Controller;

class Gallery extends Controller
{
    public static $var;

    public function __construct()
    {
        // Do things when loading the block
        // self::$var = 'Hello World';
    }

    public function variable()
    {
        // Template variable
        // {{ $variable }}
        return 'Value';
    }

    public static function action($arg)
    {
        // Static function
        // {{ Gallery::action($arg) }}
        return "Action: {$arg}";
    }
}
