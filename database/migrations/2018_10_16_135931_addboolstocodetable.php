<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addboolstocodetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('codetables', function (Blueprint $table) {
            $table->boolean('found1')->default(false);
            $table->boolean('found2')->default(false);
            $table->boolean('found3')->default(false);
            $table->boolean('found4')->default(false);
            $table->boolean('found5')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
