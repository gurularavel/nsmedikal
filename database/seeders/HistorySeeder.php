<?php

namespace Database\Seeders;

use App\Models\History;

class HistorySeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('histories') as $data) {
            History::query()->create($data);
        }
    }
}
