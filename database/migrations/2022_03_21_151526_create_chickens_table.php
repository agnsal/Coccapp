<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;
use \App\Models\Breed;
use \App\Models\Coop;

class CreateChickensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chickens', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->boolean('is_female');
            $table->timestamp('birth_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->json('details')->nullable();
            $table->foreignIdFor(Breed::class, 'breed_id')->onUpdate('cascade');
            $table->foreignIdFor(Coop::class, 'coop_id')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chickens');
    }
}
