<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types =['front-end','back-end','back and front','documentazione'];
        foreach($types as $type){
            $newType = new Type();
            $newType->title = $type;
            $newType->slug = Str::slug($type, '-');
            $newType->save();
        }
    }
}
