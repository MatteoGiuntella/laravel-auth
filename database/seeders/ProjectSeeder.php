<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Controller\ProjectController;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for( $i = 0; $i < 25 ; $i++){
            $project = new Project();
            $project->url = fake()->url();
            $project->title= fake()->domainName();
            $project->date = fake()->dateTime();
            $project->description = fake()->paragraph();
            $project->save();
        }
       
    }
}
