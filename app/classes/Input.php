<?php

namespace Itworks\classes;

class Input{
    public static function post(
        string $params, int $filter = FILTER_SANITIZE_STRING
    ){
        return filter_input(INPUT_POST, $params, $filter);
    }


    public static function get(
        string $params, int $filter = FILTER_SANITIZE_STRING
    ){
        return filter_input(INPUT_GET, $params, $filter);
    }
}