<?php
/**
Copyright 2022 Agnese Salutari.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and limitations under the License
 **/

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class OrderedSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ordered:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perform all seedings in the proper order';

    private $orderedSeedings = ['UserSeeder', 'BreedSeeder', 'CoopSeeder', 'ChickenSeeder'];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach ($this->orderedSeedings as $s) {
            Artisan::call('db:seed --class="'.$s.'"');
        }
        return 0;
    }
}
