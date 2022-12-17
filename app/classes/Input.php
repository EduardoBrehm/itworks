<?php

namespace Itworks\classes;

class Input{
    public static function post(
        string $params, int $filter = FILTER_UNSAFE_RAW
    ){
        return filter_input(INPUT_POST, $params, $filter);
    }


    public static function get(
        string $params, int $filter = FILTER_UNSAFE_RAW
    ){
        return filter_input(INPUT_GET, $params, $filter);
    }
}