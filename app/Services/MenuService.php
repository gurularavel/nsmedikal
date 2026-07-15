<?php

namespace App\Services;

class MenuService
{
    public static function check(string $name): bool
    {
        return request()->routeIs("backend.$name.*");
    }
}
