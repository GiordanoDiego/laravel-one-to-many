<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Illuminate\Support\Str;

//model
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            
            $project->title = fake()->sentence();
            $project->slug = Str::slug($project->title);
            $project->content = fake()->paragraph();
            
            $project->save();

        }
    }
}
