<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part_number');
            $table->string('alternate_pn')->nullable(true);
            $table->string('boeing_spec')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('ata')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capabilities');
    }
}
