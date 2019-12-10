<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName');
            $table->string('DOB');
            $table->string('gender');
            $table->string('email');

            $table->timestamps();
        });
        DB::statement("ALTER TABLE teachers_infos AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers_infos');
    }
}
