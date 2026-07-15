<?php

namespace Database\Seeders;

use App\Models\Counter;

class CounterSeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('counters') as $data) {
            Counter::query()->create($data);
        }
    }
}
