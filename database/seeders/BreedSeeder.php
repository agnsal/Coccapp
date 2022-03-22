<?php

namespace Database\Seeders;

use App\Models\Breed;
use App\Models\Enums\BreedEnum;
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
        $breedsNames = BreedEnum::cases();
        collect($breedsNames)->map(fn($v, $k) => Breed::create(['name' => $v]));
    }
}
