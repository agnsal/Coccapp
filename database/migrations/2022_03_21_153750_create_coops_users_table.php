<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\User;
use \App\Models\Coop;

class CreateCoopsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coops_users', function (Blueprint $table) {
            $table->id();
//            $table->foreignIdFor(\App\Models\User::class)->onUpdate('cascade');
            $table->foreignIdFor(User::class, 'user_id')->onUpdate('cascade');
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
        Schema::dropIfExists('coops_users');
    }
}
