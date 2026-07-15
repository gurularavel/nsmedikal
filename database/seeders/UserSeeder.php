<?php

namespace Database\Seeders;

use App\Models\User;

class UserSeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('users') as $data) {
            User::query()->create($data);
        }
    }
}
