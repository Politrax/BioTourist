<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('trigger', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->timestamps();
//        });
        DB::unprepared('
            CREATE TRIGGER test AFTER INSERT
            ON Announces FOR EACH ROW
            DELETE FROM `Announces` WHERE announcesis_available;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
}
