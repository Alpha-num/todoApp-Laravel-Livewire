<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'Read my books',
            'status' => 'pending'
        ]);
        Todo::create([
            'title' => 'Write some code',
            'status' => 'pending'
        ]);
    }
}
