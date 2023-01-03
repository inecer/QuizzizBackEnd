<?php

namespace Ez;

class DebugHandler
{
    public static function dump($input)
    {
        echo "<pre>";
        var_dump($input);
        echo "</pre>";

    }

}