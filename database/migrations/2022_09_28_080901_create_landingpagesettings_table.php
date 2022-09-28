<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpagesettings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->binary('logo') ->nullable();
            $table->string('title');
            $table->string('stitle');
            $table->string('location');
            $table->string('aboutus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landingpagesettings');
    }
};
