<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    protected function getData(string $file): array
    {
        return require_once database_path("seeders/data/$file.php");
    }
}
