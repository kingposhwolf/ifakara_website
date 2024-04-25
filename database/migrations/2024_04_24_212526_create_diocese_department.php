<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDioceseDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diocese_department', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('head')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->integer('staffs')->nullable();
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
        Schema::dropIfExists('diocese_department');
    }
}
