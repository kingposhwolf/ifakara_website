<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterChangesFieldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->text('news_description')->nullable()->change();
            $table->date('news_date')->nullable();
        });
        Schema::table('events', function (Blueprint $table) {
            $table->text('events_description')->nullable()->change();
            $table->string('initial_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('news_date');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('initial_description');
        });
    }
}
