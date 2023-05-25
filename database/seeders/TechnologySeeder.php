<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Technology;

class TechnologysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies =['sql','php','js','css'];


        foreach($technologies as $tech){
            $newType = new Technology();
            $newType->name = $tech;
            $newType->slug = Str::slug($tech, '-');
            $newType->save();

        }
    }
}
