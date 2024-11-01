<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'name' => 'Progetto Esempio',
            'description' => 'Descrizione del progetto esempio.',
        ]);
    }
}