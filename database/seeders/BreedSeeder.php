<?php

namespace Database\Seeders;

use App\Models\Breed;
use App\Enums\BreedEnum;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(BreedEnum::cases())->map(fn($v, $k) => Breed::create(['name' => $v]));
    }
}
