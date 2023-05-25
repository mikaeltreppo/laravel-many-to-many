<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $poesie = config('poesie');
        foreach ($poesie as $poesia)
             {
            $newProj = new Project();
            $newProj->title =$poesia['titolo'];
            $newProj->slug = Str::slug($newProj->title, '-');
            $newProj->author=$poesia['autore'];
            $newProj->description = $poesia['testo'];
            $newProj->save();

        }
    }
}